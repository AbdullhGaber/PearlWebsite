@extends('layouts.dashboard.dashboard_report.dashboard_main_report')
@section('content')

    <div class="content container">
        <div class="contentWrapper">
            <div class="firstWrapper">
                <div class="patient-info">
                    <div class="info-column">
                        <p class="salehP">Saleh Fathy</p>
                        <img src="{{ asset('assets/Images/doctor.png') }}" alt="Patient Image" class="patient-image">
                    </div>
                    <div class="info-column">
                        <p>Male</p>
                        <p>21 years</p>
                    </div>
                    <div class="info-column">
                        <p>010123456789</p>
                        <p>salehfathy@gmail.com</p>
                    </div>
                    <div class="info-column">
                        <p style="background-color:#FFF8F3;">Fragrance Allergy</p>
                        <p style="background-color: #FFF8F3;">Rosacea Patient</p>
                    </div>
                    <div class="info-column">
                        <p style="background-color:#F9FAFB;">Last Visit: 11-2-2024 at 11:00 AM</p>
                    </div>
                </div>
            </div>

            <div class="secondWrapper">
                <h4 class="text-dark fw-bold fst-normal ">PEARL Analysis</h4>
                <div class="graph-circle1"></div>
                <div class="content-right1">
                    <div class="additional-info">
                        <div class="info-content1">
                            <h3 class="text-dark fw-bold">Pores</h3>
                            <p>Visible, enlarged pores that affect skin texture, often associated with excess oil
                                production.</p>
                        </div>
                    </div>
                </div>
                <div class="graph-circle2"></div>
                <div class="content-right2">
                    <div class="additional-info">
                        <div class="info-content2">
                            <h3 class="text-dark fw-bold">Wrinkles</h3>
                            <p>Minor signs of fine lines and wrinkles are visible; targeting smoother, more
                                youthful-looking skin.</p>
                        </div>
                    </div>
                </div>
                <div class="graph-circle3"></div>
                <div class="content-right3">
                    <div class="additional-info">
                        <div class="info-content3">
                            <h3 class="text-dark fw-bold">Acne</h3>
                            <p>Occasional acne breakouts, including pimples and blackheads, can be managed with targeted
                                skincare.</p>
                        </div>
                    </div>
                </div>
                <div class="graph-circle4"></div>
                <div class="content-right4">
                    <div class="additional-info">
                        <div class="info-content4">
                            <h3 class="text-dark fw-bold">Blackheads</h3>
                            <p>Presence of blackheads, small dark spots on the skin, focus on achieving a clearer
                                complexion.</p>
                        </div>
                    </div>
                </div>
                <canvas id="skinProgressChart" width="400" height="200"></canvas>

                <h3 class="text-dark fw-bold morningroutine ">Morning routine </h3>
                <div class="product">
                    <div>
                        <img src="{{ asset('assets/Images/product1.png') }}" class="productimage">
                    </div>
                    <div class="product-details">
                        <p>Cleo</p>
                        <p>Ultra rich moisturizer</p>
                    </div>
                </div>

                <div class="product">
                    <div>
                        <img src="{{ asset('assets/Images/product2.png') }}" class="productimage">
                    </div>
                    <div class="product-details">
                        <p>Shan</p>
                        <p>Facial cleanser antioxidant</p>

                    </div>
                </div>
                <div class="product">
                    <div>
                        <img src="{{ asset('assets/Images/product7.png') }}" class="productimage">
                    </div>
                    <div class="product-details">
                        <p>Eucerin</p>
                        <p>Dermopurifyer Cleansing Gel</p>
                    </div>
                </div>
                <h3 class="text-dark fw-bold morningroutine ">Night routine</h3>
                <div class="product">
                    <div>
                        <img src="{{ asset('assets/Images/product6.png') }}" class="productimage">
                    </div>
                    <div class="product-details">
                        <p>Deroice</p>
                        <p>Foaming cleanser</p>
                    </div>
                </div>

                <div class="product">
                    <div>
                        <img src="{{ asset('assets/Images/product5.png') }}" class="productimage">
                    </div>
                    <div class="product-details">
                        <p>Cleo</p>
                        <p>Ultra rich moisturizer</p>
                    </div>
                </div>
                <div class="product">
                    <div>
                        <img src="{{ asset('assets/Images/product4.png') }}" class="productimage">
                    </div>
                    <div class="product-details">
                        <p>Starville</p>
                        <p>Acne prone skin cleanser</p>
                    </div>
                </div>
                <h3 class="text-dark fw-bold morningroutine ">Weekly routine</h3>
                <div class="product">
                    <div>
                        <img src="{{ asset('assets/Images/product3.png') }}" class="productimage">
                    </div>
                    <div class="product-details">
                        <p>Dr. Rashel</p>
                        <p>Vitamin c</p>
                    </div>
                </div>

                <div class="product">
                    <div>
                        <img src="{{ asset('assets/Images/product2.png') }}" class="productimage">
                    </div>
                    <div class="product-details">
                        <p>Dermatique </p>
                        <p>Lightening hyaluronic acid </p>
                    </div>
                </div>
                <div class="product">
                    <div>
                        <img src="{{ asset('assets/Images/product9.png') }}" class="productimage">
                    </div>
                    <div class="product-details">
                        <p>Cleo</p>
                        <p>Ultra rich moisturizer</p>
                    </div>
                </div>

            </div>
            <div class="thirdWrapper">
                <h4 class="text-dark fw-bold fst-normal">Reasons for Consultation</h4>
                <div class="input-container">
                    <h5 class="reason1">1-Pores</h5>
                    <input type="text" class="reason-input1 form-control">
                </div>
                <div class="input-container">
                    <h5 class="reason2">2-Acne</h5>
                    <input type="text" class="reason-input2 form-control">
                </div>
            </div>

            <div class="forthWrapper">
                <h4 class="text-dark fw-bold">Diagnosis </h4>
                <div class="input-container">
                    <h5 class="reason1">1-Pores</h5>
                    <input type="text" class="reason-input1 form-control">
                </div>
                <div class="input-container">
                    <h5 class="reason2">2-Acne</h5>
                    <input type="text" class="reason-input2 form-control">
                </div>
            </div>
            <div class="fifthWrapper">
                <h4 class="text-dark fw-bold">Medication</h4>

                <div class="input-container">
                    <h5>1-Netlock</h5>
                    <select class="form-select">
                        <option value="option1">Frequancy</option>
                        <option value="option2">Frequancy</option>
                        <option value="option3">Frequancy</option>
                    </select>
                    <select class="form-select">
                        <option value="option1">0 Ml</option>
                        <option value="option2">0 Ml</option>
                        <option value="option3">0 Ml</option>
                    </select>
                    <select class="form-select">
                        <option value="option1">Duration</option>
                        <option value="option2">Duration</option>
                        <option value="option3">Duration</option>
                    </select>
                </div>

                <div class="input-container">
                    <h5>2-Pnadol</h5>
                    <select class="form-select">
                        <option value="option1">Frequancy</option>
                        <option value="option2">Frequancy</option>
                        <option value="option3">Frequancy</option>
                    </select>
                    <select class="form-select">
                        <option value="option1">0 Ml</option>
                        <option value="option2">0 Ml</option>
                        <option value="option3">0 Ml</option>
                    </select>
                    <select class="form-select">
                        <option value="option1">Duration</option>
                        <option value="option2">Duration</option>
                        <option value="option3">Duration</option>
                    </select>
                </div>
            </div>

            <div class="sixthWrapper">
                <h4 class="text-dark fw-bold">Follow Up</h4>
                <div class="date-dropdown mt-4">
                    <label for="followUpDate">Select Date:</label>
                    <select id="followUpDate" name="followUpDate" class="form-select dateSelect"
                        onchange="displaySelectedDate()">
                        <option value="2024-03-07">March 7, 2024</option>
                        <option value="2024-03-08">March 8, 2024</option>
                        <option value="2024-03-09">March 9, 2024</option>
                        <option value="2024-03-10">March 10, 2024</option>
                        <option value="2024-03-11">March 11, 2024</option>
                        <option value="2024-03-12">March 12, 2024</option>
                        <option value="2024-03-13">March 13, 2024</option>
                        <option value="2024-03-14">March 14, 2024</option>
                        <option value="2024-03-15">March 15, 2024</option>
                        <option value="2024-03-16">March 16, 2024</option>
                    </select>
                </div>
                <p id="selectedDateMessage">Selected Date: </p>

                <script>
                    function displaySelectedDate() {
                        var selectedDate = document.getElementById("followUpDate").value;
                        document.getElementById("selectedDateMessage").innerText = "Selected Date: " + selectedDate;
                    }
                </script>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('assets/js/dashboard/patientsreport.js') }}"></script>
</html>
@endsection
