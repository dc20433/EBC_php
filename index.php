<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width， initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      .nav-link:hover {
        background: black;
        outline-width: 5px;
        outline-color: green;
        outline-style: double;
        color: white;
      }
    </style>
    <title>EBC</title>
  </head>
  <!-- Background image -->
  <body
    class="fw-bold d-flex align-items-center justify-content-center text-center lh-sm"
    style="
      background: url('assets/photos/a002.jpg') no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
    "
  >
    <div
      class="container bg-white rounded-3 bg-opacity-75 text-dark pt-5"
      style="min-height: 100vh; max-width: 60vh"
    >
      <a
        href="index-c.php"
        class="btn btn-outline-success border border-1 rounded-pill d-flex justify-content-center"
        style="outline-width: 5px; outline-style: double"
        ><span>
          <div class="h5 fw-bold mb-0 pt-2 px-4 mb-0">徒步珠穆朗玛峰大本营</div>
          <div class="h6 fw-bold m-0">2024年3月, 尼泊尔</div>
        </span>
      </a>
      <div class="h3 fw-bold mb-0 pt-3 text-center">
        Hike to Everest Base Camp
      </div>
      <div class="h5 mb-1 text-center">March 2024, Nepal</div>
      <div class="fs-3 fw-bold mt-2">
        <a href="intro-e.php" class="nav-link rounded-pill">Introduction</a>
      </div>
      <div class="fs-3 fw-bold">
        <a href="itinerary-e.php" class="nav-link rounded-pill">Itinerary</a>
      </div>
      <div class="fs-5">
        <a href="d01-e.php" class="nav-link rounded-pill"
          >Day 1: Kathmandu - Lukla - Phakding</a
        >
      </div>
      <div class="fs-5">
        <a href="d02-e.php" class="nav-link rounded-pill"
          >Day 2: Phakding – Namche Bazaar</a
        >
      </div>
      <div class="fs-5">
        <a href="d03-e.php" class="nav-link rounded-pill"
          >Day 3: Namche - Acclimatization</a
        >
      </div>
      <div class="fs-5">
        <a href="d04-e.php" class="nav-link rounded-pill"
          >Day 4: Namche Bazaar – Tengboche</a
        >
      </div>
      <div class="fs-5">
        <a href="d05-e.php" class="nav-link rounded-pill"
          >Day 5: Tengboche – Dingboche</a
        >
      </div>
      <div class="fs-5">
        <a href="d06-e.php" class="nav-link rounded-pill"
          >Day 6: Dingboche - Acclimatization</a
        >
      </div>
      <div class="fs-5">
        <a href="d07-e.php" class="nav-link rounded-pill"
          >Day 7: Dingboche- Lobuche</a
        >
      </div>
      <div class="fs-5">
        <a href="d08-e.php" class="nav-link rounded-pill"
          >Day 8: Lobuche - Gorakshep – EBC – Gorakshed</a
        >
      </div>
      <div class="fs-5">
        <a href="d09-e.php" class="nav-link rounded-pill"
          >Days 9-11: Gorakshep - Pangboche – Monjo – Lukla</a
        >
      </div>
      <div class="fs-5">
        <a href="d12-e.php" class="nav-link rounded-pill"
          >Day 12: Lukla – Ramechhap - Kathmandu</a
        >
      </div>
      <div class="fs-3 fw-bold">
        <a href="concl-e.php" class="nav-link rounded-pill">Conclusion</a>
      </div>
      <br />

      <button
        disabled
        class="opacity-50"
        href="https://info.flagcounter.com/PwJq"
      >
        <img
          src="https://s11.flagcounter.com/count2/PwJq/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_3/labels_0/pageviews_0/flags_0/percent_0/"
          alt="Flag Counter"
          border="0"
        />
      </button>
<?php
  include "assets/footer.php";
?>
