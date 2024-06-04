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
    class="fw-bold d-flex align-items-center justify-content-center lh-sm"
    style="
      background: url('assets/photos/a002.jpg') no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
    "
  >
    <div
      class="container bg-white rounded-3 bg-opacity-75 text-dark text-center pt-5"
      style="min-height: 100vh; max-width: 60vh"
    >
      <a
        href="index.php"
        class="btn btn-outline-success border border-1 rounded-pill d-flex justify-content-center"
        style="outline-width: 5px; outline-style: double"
        ><span>
          <div class="h5 fw-bold mb-0 pt-1">Hike to Everest Base Camp</div>
          <div class="h6 fw-bold m-0">March 2024, Nepal</div>
        </span>
      </a>
      <div class="h2 fw-bold mt-3 mb-0 text-center">徒步珠穆朗玛峰大本营</div>
      <div class="h5 fw-bold mb-2 text-center">2024年3月, 尼泊尔</div>
      <div class="fs-4 mt-3 mb-1">
        <a href="intro.php" class="nav-link rounded-pill">概述</a>
      </div>
      <div class="fs-4 mt-1">
        <a href="itinerary.php" class="nav-link rounded-pill">行程</a>
      </div>
      <div class="fs-5">
        <a href="d01.php" class="nav-link rounded-pill"
          >第1天: 加德满都 – 卢卡拉 – 巴克丁</a
        >
      </div>
      <div class="fs-5">
        <a href="d02.php" class="nav-link rounded-pill"
          >第2天: 巴克丁 – 南崅集市</a
        >
      </div>
      <div class="fs-5">
        <a href="d03.php" class="nav-link rounded-pill"
          >第3天: 南崅 - 高原适应性调整</a
        >
      </div>
      <div class="fs-5">
        <a href="d04.php" class="nav-link rounded-pill"
          >第4天: 南崅集市 – 谭布崅</a
        >
      </div>
      <div class="fs-5">
        <a href="d05.php" class="nav-link rounded-pill"
          >第5天: 谭布崅 – 丁布崅</a
        >
      </div>
      <div class="fs-5">
        <a href="d06.php" class="nav-link rounded-pill"
          >第6天: 丁布崅 - 高原适应性调整</a
        >
      </div>
      <div class="fs-5">
        <a href="d07.php" class="nav-link rounded-pill"
          >第7天: 丁布崅 – 罗布崅</a
        >
      </div>
      <div class="fs-5">
        <a href="d08.php" class="nav-link rounded-pill"
          >第8天: 罗布崅- 格拉克樰陂 – 珠峰大本营 – 格拉克樰陂</a
        >
      </div>
      <div class="fs-5">
        <a href="d09.php" class="nav-link rounded-pill"
          >第9-11天: 格拉克樰陂 – 潘布崅 – 孟丘 – 卢卡拉</a
        >
      </div>
      <div class="fs-5">
        <a href="d12.php" class="nav-link rounded-pill"
          >第12天: 卢卡拉 – 冉梅楂岥 – 加德满都</a
        >
      </div>
      <div class="fs-4 m-1">
        <a href="concl.php" class="nav-link rounded-pill">结语</a>
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
