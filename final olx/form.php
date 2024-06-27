<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>layout2</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>

  <!-- As a heading -->
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1"><strong><a href="#"><i class="bi bi-arrow-left"></i></a></strong></span>
    </div>
  </nav>
  <h2>Post Your AD</h2>
  <div class="categories-container">
    <ul class="category-list">
      <h3>Choose a Category</h3>
      <li class="dropdown">

        <i class="fas fa-car"></i>
        <div class="btn-group dropend">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Cars</button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost/final%20olx/carform.php">Cars</a></li>

          </ul>
        </div>


      </li>
      <li>
        <i class="fas fa-building"></i>

        <div class="btn-group dropend">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Properties
          </button>
          <ul class="dropdown-menu">

            <li><a class="dropdown-item" href="property.php">For Sale: Houses & Apartments</a></li>
            <li><a class="dropdown-item" href="property.php">For Rent: Houses & Apartments</a></li>
            <li><a class="dropdown-item" href="property.php">Lands & Plots</a></li>
            <li><a class="dropdown-item" href="property.php">For Rent: Shops & Offices</a></li>
            <li><a class="dropdown-item" href="property.php">For Sale: Shops & Offices</a></li>
            <li><a class="dropdown-item" href="property.php">PG & Guest Houses</a></li>
          </ul>
        </div>
      </li>

      <li>
        <i class="fas fa-mobile-alt"></i>
        <div class="btn-group dropend">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Mobile
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="mobileform.php">Mobile Phones</a></li>
            <li><a class="dropdown-item" href="mobileform.php">Accessories</a></li>
            <li><a class="dropdown-item" href="mobileform.php">Tablets</a></li>
          </ul>
        </div>
      </li>
      <li>
        <i class="fas fa-briefcase"></i>
        <div class="btn-group dropend">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            jobs
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">Data entry & Back office</a></li>
            <li><a href="#">Sales & Marketing</a></li>
            <li><a class="dropdown-item" href="job.php">BPO & Telecaller</a></li>
            <li><a class="dropdown-item" href="job.php">Driver</a></li>
            <li><a class="dropdown-item" href="job.php">Office Assistant</a></li>
            <li><a class="dropdown-item" href="job.php">Delivery & Collection</a></li>
            <li><a class="dropdown-item" href="job.php">Teacher</a></li>
            <li><a class="dropdown-item" href="job.php">Cook</a></li>
            <li><a class="dropdown-item" href="job.php">Receptionist & Front office</a></li>
            <li><a class="dropdown-item" href="job.php">Operator & Technician</a></li>
            <li><a class="dropdown-item" href="job.php">IT Engineer & Developer</a></li>
            <li><a class="dropdown-item" href="job.php">Hotel & Travel Executive</a></li>
            <li><a class="dropdown-item" href="job.php">Accountant</a></li>
            <li><a class="dropdown-item" href="job.php">Other Jobs</a></li>
            <li><a class="dropdown-item" href="job.php">Designer</a></li>
          </ul>
        </div>
      </li>
      <li>
        <i class="fas fa-motorcycle"></i>
        <div class="btn-group dropend">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Bikes
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="carform.php">Motorcycles</a></li>
            <li><a class="dropdown-item" href="carform.php">Scooters</a></li>
            <li><a class="dropdown-item" href="carform.php">Spare Parts</a></li>
            <li><a class="dropdown-item" href="carform.php">Bicycles</a></li>
          </ul>
        </div>
      </li>
      <li>
        <i class="fas fa-tv"></i><!--<span>Electronics & Appliances</span>-->
        <div class="btn-group dropend">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Electronics & Appliances
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="electronics&app.php">TVs, Video - Audio</a></li>
            <li><a class="dropdown-item" href="electronics&app.php">Kitchen & Other Appliances</a></li>
            <li><a class="dropdown-item" href="electronics&app.php">Computers & Laptops</a></li>
            <li><a class="dropdown-item" href="electronics&app.php">Cameras & Lenses</a></li>
            <li><a class="dropdown-item" href="electronics&app.php">Games & Entertainment</a></li>
            <li><a class="dropdown-item" href="electronics&app.php">Fridge</a></li>
            <li><a class="dropdown-item" href="electronics&app.php">Computer Accessories</a></li>
            <li><a class="dropdown-item" href="electronics&app.php">Hard Disks, Printers & Monitors</a></li>
            <li><a class="dropdown-item" href="electronics&app.php">Ac's</a></li>
          </ul>
        </div>
      </li>
      <li>
        <i class="fas fa-truck"></i>
        <div class="btn-group dropend">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Commercial Vehicles & Spares
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="commercial.php">Commercial Vehicles & other Vehicles</a></li>
            <li><a class="dropdown-item" href="commercial.php">Spare Parts</a></li>

          </ul>
        </div>
      </li>


      <li>
        <i class="fas fa-chair"></i>
        <div class="btn-group dropend">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Furniture
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="furniture.php">Sofa & Dining</a></li>
            <li><a class="dropdown-item" href="furniture.php">Beds & Wardrobes</a></li>
            <li><a class="dropdown-item" href="furniture.php">Home Decor & Garden</a></li>
            <li><a class="dropdown-item" href="furniture.php">Kids Furniture</a></li>
            <li><a class="dropdown-item" href="furniture.php">Other Household Items</a></li>
          </ul>
        </div>
      </li>


      
      <li class="dropdown">

        <i class="fas fa-tshirt"></i>
        <div class="btn-group dropend">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Fashion
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="finalform.php">Men</a></li>
            <li><a class="dropdown-item" href="finalform.php">Women</a></li>
            <li><a class="dropdown-item" href="finalform.php">Kids</a></li>
          </ul>
        </div>

      </li>
      <li class="dropdown">

        <i class="fas fa-book"></i>
        <div class="btn-group dropend">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Books, Sports & Hobbies
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="finalform.php">Books</a></li>
            <li><a class="dropdown-item" href="finalform.php">Gym & Fitness</a></li>
            <li><a class="dropdown-item" href="finalform.php">Musical Instruments</a></li>
            <li><a class="dropdown-item" href="finalform.php">Sports Equipments</a></li>
            <li><a class="dropdown-item" href="finalform.php">Other Hobbies</a></li>
          </ul>
        </div>
      </li>

      <li class="dropdown">

        <i class="fas fa-paw"></i>
        <div class="btn-group dropend">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Pets
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="finalform.php">Fishes & Aquarium</a></li>
            <li><a class="dropdown-item" href="finalform.php">Pet Food & Accessories</a></li>
            <li><a class="dropdown-item" href="finalform.php">Dogs</a></li>

          </ul>
        </div>
      </li>
      <li class="dropdown">

        <i class="fas fa-hands-helping"></i>
        <div class="btn-group dropend">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            Services
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="finalform.php">Education & Classes</a></li>
            <li><a class="dropdown-item" href="finalform.php">Tours & Travel</a></li>
            <li><a class="dropdown-item" href="finalform.php">Electronics Repair & Services</a></li>
            <li><a class="dropdown-item" href="finalform.php">Health & Beauty</a></li>
            <li><a class="dropdown-item" href="finalform.php">Home Renovation & Repair</a></li>
            <li><a class="dropdown-item" href="finalform.php">Cleaning & Pest Control</a></li>
            <li><a class="dropdown-item" href="finalform.php">Legal & Documentation Services</a></li>
            <li><a class="dropdown-item" href="finalform.php">Packers & Movers</a></li>
            <li><a class="dropdown-item" href="finalform.php"> Other Services</a></li>
          </ul>
        </div>

      </li>
    </ul>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>