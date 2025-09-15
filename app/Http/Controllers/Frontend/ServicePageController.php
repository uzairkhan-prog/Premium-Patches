<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Blog;

class ServicePageController extends Controller
{
    public function index()
    {
        $services = Service::paginate(6); // Adjust the number of items per page
        $portfolios = Portfolio::all();
        $blogs = Blog::paginate(3); // 3 items per page
        return view('service', compact('services', 'portfolios', 'blogs'));
    }

    // In your ServicePageController.php
    public function showSingleServciePage($type)
    {
        $blogs = Blog::paginate(3); // 3 items per page

        // Define the service details for all services, including FAQ
        $services = [
            'logo-digitizing' => [
                'image'        => '1',
                'name'        => 'Logo Digitizing',
                'description' => 'We specialize in converting your logos into high-quality embroidery designs.',
                'overview'    => 'Our logo digitizing service provides precision and quality for your custom embroidery projects.',
                'howToGet'    => 'Simply upload your logo, and our team will digitize it into an embroidery-ready file.',
                'faq' => [
                    'What file formats are accepted for logo digitizing?'             => 'We accept PNG, JPEG, EPS, and AI files.',
                    'How long will it take to digitize my logo?'                     => 'Typically, it takes 1–2 business days for a standard design.',
                ],
            ],
            '3d-puff-embroidery-digitizing' => [
                'image'        => '2',
                'name'        => '3D Puff Embroidery Digitizing',
                'description' => 'Experience the bold, raised effect with our 3D puff embroidery digitizing service.',
                'overview'    => 'Perfect for caps, jackets, and other fashion apparel, our 3D puff embroidery adds a unique texture to your designs.',
                'howToGet'    => 'Submit your design and select the desired puff effect for a standout look.',
                'faq' => [
                    'What is 3D Puff Embroidery?'                                   => '3D puff embroidery creates a raised, textured effect on your designs using foam.',
                    'Can I use 3D Puff Embroidery on any fabric?'                   => '3D Puff works best on thicker fabrics like caps, jackets, and sweatshirts.',
                ],
            ],
            'left-chest-digitizing' => [
                'image'        => '3',
                'name'        => 'Left Chest Digitizing',
                'description' => 'A classic choice for corporate uniforms, our left chest digitizing ensures high‑quality, professional designs.',
                'overview'    => 'We deliver detailed and precise digitized designs for left chest embroidery on uniforms, polos, and jackets.',
                'howToGet'    => 'Provide your design and choose the placement for perfect embroidery results.',
                'faq' => [
                    'What size should the design be for left chest embroidery?'   => 'We recommend a design size of 3–4 inches for a proper fit on the left chest area.',
                    'Can I use any font for the text?'                            => 'Yes, we can digitize any font you prefer, as long as it is clear and readable.',
                ],
            ],
            'centre-chest-digitizing' => [
                'image'        => '4',
                'name'        => 'Centre Chest Digitizing',
                'description' => 'For a larger, more prominent embroidery design, we offer professional center chest digitizing.',
                'overview'    => 'Great for sportswear, jackets, and team uniforms, this digitizing option provides clear, bold designs.',
                'howToGet'    => 'Upload your artwork, and let us take care of the digitizing for a flawless center chest embroidery.',
                'faq' => [
                    'How large can the design be for center chest digitizing?'    => 'The design can range from 6–10 inches wide, depending on the garment size.',
                    'Do you offer color matching for the embroidery?'             => 'Yes, we match the embroidery color to your design or provide color options.',
                ],
            ],
            'applique-digitizing' => [
                'image'        => '5',
                'name'        => 'Applique Digitizing',
                'description' => 'Add a textured look to your designs with applique digitizing, perfect for a premium finish.',
                'overview'    => 'Applique digitizing is ideal for creating layered and intricate designs on any fabric.',
                'howToGet'    => 'Send your design for digitization, and select the fabric and color options to match your style.',
                'faq' => [
                    'What is applique digitizing?'                              => 'Applique involves stitching fabric onto a base garment, providing texture and dimension to your design.',
                    'Is applique digitizing suitable for all fabrics?'          => 'Applique works best on thicker fabrics like denim, canvas, and jackets.',
                ],
            ],
            'cap-digitizing' => [
                'image'        => '6',
                'name'        => 'Cap Digitizing',
                'description' => 'Cap digitizing allows for detailed and high‑quality embroidery on caps and hats.',
                'overview'    => 'We ensure your cap designs come out crisp and clear with our expert cap digitizing service.',
                'howToGet'    => 'Simply provide your design, and we’ll digitize it for the perfect fit on any cap style.',
                'faq' => [
                    'Can my logo fit on all cap styles?'                         => 'We offer digitizing for all cap types, but some designs may require resizing to fit the cap’s shape.',
                    'What are the size limitations for cap embroidery?'          => 'We recommend designs that are no wider than 4 inches for caps.',
                ],
            ],
            'jacket-back-digitizing' => [
                'image'        => '7',
                'name'        => 'Jacket Back Digitizing',
                'description' => 'Bring attention to the back of your jacket with our jacket back digitizing service.',
                'overview'    => 'This service is ideal for large designs and logos that need to be prominently featured on jackets.',
                'howToGet'    => 'Upload your large logo or design, and we will digitize it for the perfect placement on jacket backs.',
                'faq' => [
                    'What size should my design be for jacket back embroidery?' => 'For optimal results, we recommend designs that are 8–12 inches wide.',
                    'Can I include text in my jacket back design?'               => 'Yes, we can digitize text as part of the design, as long as it is legible.',
                ],
            ],
            'sew-on-embroidered' => [
                'image'        => '8',
                'name'        => 'Sew-On Embroidered Patches',
                'description' => 'We provide sew‑on embroidered patches that add durability and aesthetic appeal to any item.',
                'overview'    => 'Our sew‑on patches are ideal for uniforms, jackets, and other apparel, offering long‑lasting, high‑quality embroidery.',
                'howToGet'    => 'Choose the size and design for your sew‑on embroidered patch, and we will create it for you.',
                'faq' => [
                    'How durable are sew-on embroidered patches?'               => 'Sew‑on patches are extremely durable and can withstand heavy washing and wear.',
                    'Can I customize the shape of my embroidered patch?'       => 'Yes, we can create custom‑shaped patches as per your design specifications.',
                ],
            ],
            'iron-on-embroidered' => [
                'image'        => '9',
                'name'        => 'Iron-On Embroidered Patches',
                'description' => 'Our iron‑on embroidered patches make it easy to apply intricate embroidery to your garments.',
                'overview'    => 'Perfect for DIY projects, uniforms, and personalization, these patches can be easily ironed on any fabric.',
                'howToGet'    => 'Select your design, and we will provide an iron‑on version for effortless application.',
                'faq' => [
                    'How do I apply an iron-on patch?'                          => 'Simply use an iron to press the patch onto your fabric for a secure, permanent bond.',
                    'Can I remove an iron-on patch?'                           => 'It is possible to remove an iron‑on patch, but it may leave residue or affect the fabric.',
                ],
            ],
            'velcro-embroidered' => [
                'image'        => '10',
                'name'        => 'Velcro Embroidered Patches',
                'description' => 'Velcro embroidered patches offer flexibility and easy attachment to various fabrics and surfaces.',
                'overview'    => 'Ideal for military uniforms, workwear, and customizable items, our velcro patches are versatile and durable.',
                'howToGet'    => 'Send us your design, and we will add velcro backing for easy attachment and detachment.',
                'faq' => [
                    'What is the advantage of velcro embroidered patches?'    => 'Velcro patches offer easy attachment and detachment, ideal for uniforms or personalized gear.',
                    'Can velcro patches be washed?'                           => 'Yes, velcro patches can be washed, but it’s best to secure them properly before washing.',
                ],
            ],
            'adhesive-patches' => [
                'image'        => '11',
                'name'        => 'Adhesive Patches',
                'description' => 'Our adhesive patches provide a permanent bond without sewing, perfect for quick customization.',
                'overview'    => 'These patches can be applied easily to any fabric, offering a clean, neat finish without the hassle of stitching.',
                'howToGet'    => 'Provide your artwork, and we’ll create an adhesive‑backed patch for easy application.',
                'faq' => [
                    'How do I apply adhesive patches?'                        => 'Simply peel off the backing and press the patch onto your fabric for a secure bond.',
                    'Are adhesive patches permanent?'                         => 'Yes, adhesive patches provide a permanent bond but can be difficult to remove.',
                ],
            ],
            'pvc-patches' => [
                'image'        => '12',
                'name'        => 'PVC Patches',
                'description' => 'PVC patches offer a modern, durable, and weather-resistant option for custom embroidery designs.',
                'overview'    => 'Our PVC patches are perfect for sports teams, uniforms, and outdoor gear, offering vibrant designs that last.',
                'howToGet'    => 'Upload your design, and we will create a PVC patch in your chosen colors and size.',
                'faq' => [
                    'What is the benefit of PVC patches?'                     => 'PVC patches are durable, waterproof, and ideal for outdoor use and high‑wear items.',
                    'Can I create a custom shape for my PVC patch?'           => 'Yes, we can create PVC patches in any custom shape you need.',
                ],
            ],
            'leather-patches' => [
                'image'        => '13',
                'name'        => 'Leather Patches',
                'description' => 'For a premium, stylish look, our leather patches provide a unique and high‑end finish for your garments.',
                'overview'    => 'Perfect for jackets, bags, and accessories, these leather patches can be embossed or debossed with your design.',
                'howToGet'    => 'Choose from various leather options, and provide your design for the perfect patch creation.',
                'faq' => [
                    'Can I choose the type of leather for my patches?'       => 'Yes, we offer a variety of leather options for a unique, premium finish.',
                    'How do I care for leather patches?'                     => 'Leather patches should be kept away from excessive moisture and direct sunlight to maintain their quality.',
                ],
            ],
            'raster-to-vector' => [
                'image'        => '14',
                'name'        => 'Raster to Vector Conversion',
                'description' => 'Convert your raster images (JPEG, PNG, BMP) into crisp, scalable vector formats like SVG, AI, and EPS.',
                'overview'    => 'Our expert designers manually trace or auto‑trace your raster images to ensure clean lines, smooth curves, and perfect color separation—ideal for logos, illustrations, screen printing, and more.',
                'howToGet'    => 'Upload your raster file in any common format, select your desired output (SVG, AI, EPS), and receive your vector within 24 hours.',
                'faq' => [
                    'What file types can you convert?'                   => 'We accept JPEG, PNG, BMP, TIFF, and GIF.',
                    'Which vector formats do you provide?'               => 'We can deliver AI, EPS, SVG, and PDF.',
                    'How long does conversion take?'                     => 'Standard turnaround is 24 hours, rush service available.',
                ],
            ],
        ];

        // Check if the patch type exists
        if (! array_key_exists($type, $services)) {
            abort(404);
        }

        return view('services.details', [
            'service' => $services[$type],
            'Type'    => $type,
            'allServices' => $services,
        ], compact('blogs'));
    }
}