<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Artikels;
use App\Models\AtraksiWisata;
use App\Models\Benefit;
use App\Models\Galery;
use App\Models\Mitra;
use App\Models\PaketWisata;
use App\Models\Slider;
use App\Models\WebsiteVisitor;
use App\Models\WhyUs;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admindashboard()
    {

        // Menghitung jumlah total data
        $totalArtikels = Artikels::count();
        $totalAboutUs = AboutUs::count();
        $totalGalery = Galery::count();
        $totalPaketWisata = PaketWisata::count();
        $totalAtraksiWisata = AtraksiWisata::count();
        $totalSlider = Slider::count();
        $totalWhyUs = WhyUs::count();
        $totalMitra = Mitra::count();
        $totalBenefit = Benefit::count();
        // Total kunjungan keseluruhan
        $totalVisits = WebsiteVisitor::where('url', 'like', '%/dashboardkbc%')->count();

        // Total kunjungan harian
        $dailyVisits = WebsiteVisitor::where('url', 'like', '%/dashboardkbc%')
            ->whereDate('created_at', today())
            ->count();

        // Total kunjungan mingguan
        $weeklyVisits = WebsiteVisitor::where('url', 'like', '%/dashboardkbc%')
            ->where('created_at', '>=', now()->subWeek())
            ->count();

        // Total kunjungan bulanan
        $monthlyVisits = WebsiteVisitor::where('url', 'like', '%/dashboardkbc%')
            ->where('created_at', '>=', now()->subMonth())
            ->count();
        return view('admin/index', compact(
            'totalArtikels',
            'totalAboutUs',
            'totalGalery',
            'totalPaketWisata',
            'totalAtraksiWisata',
            'totalSlider',
            'totalWhyUs',
            'totalMitra',
            'totalBenefit',
            'totalVisits',
            'dailyVisits',
            'weeklyVisits',
            'monthlyVisits'
        ));
    }
}
