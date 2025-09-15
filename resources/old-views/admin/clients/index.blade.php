@extends('admin.layouts.app')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Submissions
                            <a href="{{ route('clients.exportAll') }}" id="exportAllBtn" class="btn btn-success" style="position: absolute;right: 136px;margin: 0 !important;">Export All Excel</a>
                            <a href="#" id="exportSelectedBtn" class="btn btn-info" onclick="exportSelected()" style="display: none;position: absolute;right: 136px;margin: 0 !important;">Export Selected Excel</a>
                        </h4>
                        <div class="table-responsive">
                            @if(session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" id="masterCheckbox" class="client-checkbox-all" onclick="toggleAll(this)">
                                        </th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Submissions</th>
                                        <th>Date & Time</th>
                                        <th>Export</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                    <tr>
                                        <td>
                                            <div class="form-check p-0">
                                                <input type="checkbox" class="client-checkbox client-checkbox-all" data-id="{{ $client->id }}" id="clientCheckbox{{ $client->id }}">
                                                <label for="clientCheckbox{{ $client->id }}" style="margin-left: 5px; display: none">{{ $client->id }}</label>
                                            </div>
                                        </td>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->email }}</td>
                                        <td>{{ $client->phone }}</td>
                                        <td>{{ $client->message }}</td>
                                        <td>{{ $client->created_at->format('M. d, Y h:i A') }}</td>
                                        <td class="text-center">
                                            <a href="#" class="export" data-toggle="modal" data-target="#editEmployeeModal" data-id="{{ $client->id }}"
                                                data-name="{{ $client->name }}"
                                                data-email="{{ $client->email }}"
                                                data-phone="{{ $client->phone }}"
                                                data-service="{{ $client->service }}"
                                                data-subject="{{ $client->subject }}"
                                                data-message="{{ $client->message }}" style="display: flex;">
                                                <i class="fa fa-cloud-download menu-icon" data-toggle="tooltip" title="Export"></i>
                                                <i class="fa-solid fa-eye menu-icon" data-toggle="tooltip" title="View"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <!-- <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-success btn-rounded btn-fw">
                                                Edit
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a> -->
                                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-rounded btn-fw">
                                                    Delete
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Show Modal HTML -->
<div id="editEmployeeModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Client Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <!-- Form fields in rows -->
                        <div class="form-group col-md-6">
                            <label>
                                <h2>Name</h2>
                            </label>
                            <input class="form-control" id="modalClientName" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label>
                                <h2>Email</h2>
                            </label>
                            <input class="form-control" id="modalClientEmail" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label>
                                <h2>Phone</h2>
                            </label>
                            <input class="form-control" id="modalClientPhone" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label>
                                <h2>Service</h2>
                            </label>
                            <input class="form-control" id="modalClientService" readonly>
                        </div>

                        <!-- <div class="form-group col-md-6">
                            <label>
                                <h2>Subject</h2>
                            </label>
                            <textarea class="form-control" id="modalClientSubject" rows="5" readonly></textarea>
                        </div> -->

                        <div class="form-group col-md-12">
                            <label>
                                <h2>Message</h2>
                            </label>
                            <textarea class="form-control" id="modalClientMessage" rows="5" readonly></textarea>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" id="downloadClientDocument" class="btn btn-secondary btn-sm">Download Client Document</a>
                    <a href="#" id="exportClientExcel" class="btn btn-info btn-sm">Export Excel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function toggleAll(masterCheckbox) {
        const checkboxes = document.querySelectorAll('.client-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = masterCheckbox.checked;
        });
    }

    function exportSelected() {
        const selectedClients = [];
        document.querySelectorAll('.client-checkbox:checked').forEach(checkbox => {
            selectedClients.push(checkbox.getAttribute('data-id'));
        });

        if (selectedClients.length > 0) {
            // Redirect to the export route with selected IDs as a query parameter
            window.location.href = '{{ route("clients.exportSelected") }}' + '?ids=' + selectedClients.join(',');
        } else {
            alert('No clients selected for export!');
        }
    }

    // Function to toggle between "Export All" and "Export Selected"
    function updateExportButtonVisibility() {
        const checkboxes = document.querySelectorAll('.client-checkbox-all');
        const anyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

        document.getElementById('exportAllBtn').style.display = anyChecked ? 'none' : 'inline-block';
        document.getElementById('exportSelectedBtn').style.display = anyChecked ? 'inline-block' : 'none';
    }

    // Attach the change event to all checkboxes to update the buttons when their state changes
    document.querySelectorAll('.client-checkbox-all').forEach(checkbox => {
        checkbox.addEventListener('change', updateExportButtonVisibility);
    });

    // Function to export selected clients
    function exportSelected() {
        const selectedClients = [];
        document.querySelectorAll('.client-checkbox-all:checked').forEach(checkbox => {
            selectedClients.push(checkbox.getAttribute('data-id'));
        });

        if (selectedClients.length > 0) {
            window.location.href = '{{ route("clients.exportSelected") }}' + '?ids=' + selectedClients.join(',');
        } else {
            alert('No clients selected for export!');
        }
    }
</script>

@endsection