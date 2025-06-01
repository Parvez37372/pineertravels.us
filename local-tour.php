<?php include("include/header.php"); ?>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<style>
.hero-section {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px 20px;
    background-image: url('assest/img/title-banner.webp');
    background-size: cover;
    background-position: center;
    flex-wrap: wrap;
    text-align: center;
}

.left-content,
.right-content {
    flex: 1;
    display: flex;
    justify-content: center;
    margin: 10px;
}

.center-content {
    flex: 2;
    text-align: center;
}

.center-content h1 {
    font-size: 36px;
    font-weight: bold;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
}

.left-content img,
.right-content img {
    max-width: 150px;
    height: auto;
}

@media (max-width: 768px) {
    .hero-section {
        flex-direction: column;
    }

    .center-content h1 {
        font-size: 28px;
    }

    .left-content img,
    .right-content img {
        max-width: 120px;
    }
}
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="left-content">
        <img src="assest/img/vacation.png" alt="Luggage and travel items">
    </div>
    <div class="center-content">
        <h1>Local Tours</h1>
    </div>
    <div class="right-content">
        <img src="assest/img/location-removebg-preview.webp" alt="Travel location">
    </div>
</section>

<!-- Main Content -->
<section class="bg-white py-12">
    <div class="container mx-auto px-4">

        <!-- Section Heading -->
        <div class="bg-gradient-to-r from-blue-700 to-indigo-700 text-white p-6 rounded-lg mb-8 shadow-lg">
            <h1 class="text-3xl font-bold mb-2">Book Local Tours</h1>
            <p class="text-sm">Discover beautiful places across India with comfort and ease</p>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Sidebar -->
            <div class="bg-gray-100 p-6 rounded-lg shadow">
                <h2 class="text-lg font-semibold mb-4">Tour Summary Local</h2>
                <img src="assest/img/airhost.webp" alt="Tour Summary">
            </div>

            <!-- Tour Listings -->
            <div class="md:col-span-2 space-y-6">

                <!-- Tour 1 -->
                <div class="bg-white p-4 rounded-lg shadow flex flex-col md:flex-row items-start md:items-center justify-between">
                    <div class="md:flex md:items-center space-x-4">
                        <img src="https://www.namasteholiday.com/images/delhi/delhi-day_trip.jpg" alt="Delhi City Tour" class="w-40 h-28 object-cover rounded-md mb-4 md:mb-0">
                        <div>
                            <h3 class="text-xl font-semibold">Delhi City Tour</h3>
                            <p class="text-sm text-gray-500">1 Day | India Gate, Red Fort, Lotus Temple</p>
                        </div>
                    </div>
                    <div class="text-right mt-4 md:mt-0">
                        <p class="text-lg font-bold text-green-600">₹1,999</p>
                        <button class="mt-2 bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Book Now</button>
                    </div>
                </div>

                <!-- Tour 2 -->
                <div class="bg-white p-4 rounded-lg shadow flex flex-col md:flex-row items-start md:items-center justify-between">
                    <div class="md:flex md:items-center space-x-4">
                        <img src="https://elefanjoy.com/wp-content/uploads/2023/03/untitled-1800-800px.webp" alt="Jaipur Tour" class="w-40 h-28 object-cover rounded-md mb-4 md:mb-0">
                        <div>
                            <h3 class="text-xl font-semibold">Jaipur Heritage Tour</h3>
                            <p class="text-sm text-gray-500">2 Days | Amber Fort, Hawa Mahal, City Palace</p>
                        </div>
                    </div>
                    <div class="text-right mt-4 md:mt-0">
                        <p class="text-lg font-bold text-green-600">₹4,999</p>
                        <button class="mt-2 bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Book Now</button>
                    </div>
                </div>

                <!-- Tour 3 -->
                <div class="bg-white p-4 rounded-lg shadow flex flex-col md:flex-row items-start md:items-center justify-between">
                    <div class="md:flex md:items-center space-x-4">
                        <img src="https://travelsetu.com/apps/uploads/new_destinations_photos/destination/2023/12/28/1f4e9b0841e5744371bd1246d9083e82_1000x1000.jpg" alt="Goa Tour" class="w-40 h-28 object-cover rounded-md mb-4 md:mb-0">
                        <div>
                            <h3 class="text-xl font-semibold">Goa Beach Tour</h3>
                            <p class="text-sm text-gray-500">3 Days | Baga Beach, Cruise, Fort Aguada</p>
                        </div>
                    </div>
                    <div class="text-right mt-4 md:mt-0">
                        <p class="text-lg font-bold text-green-600">₹7,999</p>
                        <button class="mt-2 bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Book Now</button>
                    </div>
                </div>

                <!-- Tour 4 -->
                <div class="bg-white p-4 rounded-lg shadow flex flex-col md:flex-row items-start md:items-center justify-between">
                    <div class="md:flex md:items-center space-x-4">
                        <img src="https://plutotours.in/places/wp-content/uploads/2024/08/Naini-Lake-1024x648.webp" alt="Nainital Tour" class="w-40 h-28 object-cover rounded-md mb-4 md:mb-0">
                        <div>
                            <h3 class="text-xl font-semibold">Nainital Hill Tour</h3>
                            <p class="text-sm text-gray-500">2 Days | Naini Lake, Mall Road, Snow View</p>
                        </div>
                    </div>
                    <div class="text-right mt-4 md:mt-0">
                        <p class="text-lg font-bold text-green-600">₹5,499</p>
                        <button class="mt-2 bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Book Now</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include("include/footer.php"); ?>
