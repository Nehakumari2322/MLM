<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>Demo</title>

    <style>
      /* body {
        margin: 0px;
        height: 100vh;
        background: #1283da;
      } */

      body {
        font-family: "Times New Roman", Times, serif;
      }
      .text-center .card {
        background-color: #ffffff;
      }
      .center {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50px;
      }
      .form-input {
        width: 350px;
        padding: 20px;
        background: #fff;
        box-shadow: -3px -3px 7px rgba(94, 104, 121, 0.377),
          3px 3px 7px rgba(94, 104, 121, 0.377);

        border: none;
      }
      .form-input img {
        width: 100%;
        display: none;
        margin-bottom: 30px;
      }
      .form-input input {
        display: none;
      }

      .form-input label {
        display: block;
        width: 45%;
        height: 45px;
        margin-left: 25%;
        line-height: 50px;
        text-align: center;
        background: #1172c2;
        color: #fff;
        font-size: 15px;
        font-family: "Open Sans", sans-serif;
        text-transform: Uppercase;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
      }

      .ui {
        border: none;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link disabled"
                href="#"
                tabindex="-1"
                aria-disabled="true"
                >Disabled</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Add Courses Section-->

    <div class="container">
      <div class="card">
        <h2
          style="
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
          "
        >
         Add Course Details
        </h2>
        <div class="center">
          <div class="form-input" >
            <label for="file-ip-1">Upload Image</label>
            <input
              type="file"
              id="file-ip-1"
              accept="image/*"
              onchange="showPreview(event);"
            />
            <div class="preview">
              <img id="file-ip-1-preview" />
            </div>
          </div>
        </div>
        <!-- Section: Design Block -->
        <div class="card">
          <section class="text-center">
            <div class="card py-5 px-md-5">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <form action="">
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4"
                          >Language</label
                        >
                        <div class="row form-control" style="margin-left: 0.2%">
                          <select name="gender" class="ui dropdown" id="select">
                            <option value="">Slect a Course</option>
                            <option value="female">Skill Development</option>
                            <option value="male">Skill Development</option>
                            <option value="female">Skill Development</option>
                            <option value="female">Skill Development</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-outline mb-4">
                        <!-- <input
                            type=""
                            id="form3Example3"
                            class="form-control"
                          />-->
                        <label class="form-label" for="form3Example3"
                          >Course Description</label
                        >
                        <textarea
                          class="form-control"
                          id="exampleFormControlTextarea1"
                          rows="3"
                          placeholder="Write a description....."
                        ></textarea>
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4"
                          >Language</label
                        >
                        <div class="row form-control" style="margin-left: 0.2%">
                          <select name="gender" class="ui dropdown" id="select">
                            <option value="">Slect a language</option>
                            <option value="female">Hindi</option>
                            <option value="male">English</option>
                            <option value="female">Tamil</option>
                            <option value="female">Bengoali</option>
                          </select>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="row">
                      <h2 style="text-align: center">Set Schdule</h2>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label for="Date">Start Date</label>
                          <input
                            type="date"
                            id="form3Example1"
                            class="form-control"
                            placeholder="Start-Date"
                          />
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label for="Date">End Date</label>
                          <input
                            type="date"
                            id="form3Example2"
                            class="form-control"
                            placeholder="End-Date"
                          />
                        </div>
                      </div>
                    </div>
                    <!--Enput time  -->
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label for="Date">Start Time</label>
                          <input
                            type="time"
                            id="form3Example1"
                            class="form-control"
                            placeholder="Start-Date"
                          />
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label for="Date">End Time </label>
                          <input
                            type="time"
                            id="form3Example2"
                            class="form-control"
                            placeholder="End-Date"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                  <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->

                    <!-- Email input -->

                    <!-- Submit button -->
                    <button
                      type="submit"
                      class="btn btn-primary mb-4"
                      style="
                        border-radius: 50px;
                        padding-left: 5%;
                        padding-right: 5%;
                      "
                    >
                      Submit
                    </button>

                    <!-- Register buttons -->
                  </form>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!-- Section: Design Block -->
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script>
      function showPreview(event) {
        if (event.target.files.length > 0) {
          var src = URL.createObjectURL(event.target.files[0]);
          var preview = document.getElementById("file-ip-1-preview");
          preview.src = src;
          preview.style.display = "block";
        }
      }
    </script>
  </body>
</html>
