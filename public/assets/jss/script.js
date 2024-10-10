$(document).ready(function() {
    let currentIndex = 0;
    const slides = $('.slide');
    const totalSlides = slides.length;
    const slideInterval = 3000; // Waktu untuk berpindah slide otomatis (dalam milidetik)
    let interval;

    // Fungsi untuk menampilkan slide berdasarkan index
    function showSlide(index) {
        slides.hide(); // Sembunyikan semua slide
        slides.eq(index).fadeIn(); // Tampilkan slide yang sesuai dengan efek fade
    }

    // Fungsi untuk berpindah ke slide berikutnya
    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides; // Update index untuk slide berikutnya
        showSlide(currentIndex); // Tampilkan slide berikutnya
    }

    // Fungsi untuk berpindah ke slide sebelumnya
    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides; // Update index untuk slide sebelumnya
        showSlide(currentIndex); // Tampilkan slide sebelumnya
    }

    // Fungsi untuk memulai interval otomatis
    function startAutoSlide() {
        interval = setInterval(nextSlide, slideInterval);
    }

    // Fungsi untuk menghentikan interval otomatis
    function stopAutoSlide() {
        clearInterval(interval);
    }

    // Tampilkan slide pertama
    showSlide(currentIndex);

    // Set interval untuk berpindah slide otomatis
    startAutoSlide();

    // Event listener untuk tombol Next
    $('#nextSlide').click(function() {
        stopAutoSlide(); // Matikan interval saat tombol diklik
        nextSlide(); // Geser ke slide berikutnya
        startAutoSlide(); // Mulai ulang interval otomatis
    });

    // Event listener untuk tombol Previous
    $('#prevSlide').click(function() {
        stopAutoSlide(); // Matikan interval saat tombol diklik
        prevSlide(); // Geser ke slide sebelumnya
        startAutoSlide(); // Mulai ulang interval otomatis
    });
});
