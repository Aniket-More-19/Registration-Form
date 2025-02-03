<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('styles/registration.css') ?>">

    <!-- STYLES -->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Handlee&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Patrick+Hand&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>

<body>

    <!-- HEADER: MENU + HEROE SECTION -->
    <header>
        <div class="header-container">
            <div class="logo-img">
                <img src="<?php echo base_url('images/reliance-logo.png') ?>" alt="reliance logo image">
            </div>

            <div>
                <h1>RELIANCE ENTRACE TEST</h1>
                <h1>RET-2025</h1>
            </div>

        </div>

    </header>

    <!-- CONTENT -->
    <section class="">
        <div class="copyright-container d-flex flex-row justify-content-center align-items-center">
            <img src="<?php echo base_url('images/edofox-logo.png') ?>" alt="edofox logo image">
            <p>powered by EDOFOX</p>
        </div>
        <div class="registration-form-container d-flex flex-row justify-content-center align-items-center ">
            <div class="registration-form">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="studentName" class="form-label text-uppercase fw-semibold">Student Name <span class="compulsory-field">*</span></label>
                        <input type="text" class="form-control p-3" id="studentName" placeholder="Enter student name">
                    </div>

                    <div class="mb-3">
                        <label for="motherName" class="form-label text-uppercase fw-semibold">Mother Name <span class="compulsory-field">*</span></label>
                        <input type="text" class="form-control p-3" id="motherName" placeholder="Enter mother name">
                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label text-uppercase fw-semibold">Date of Birth <span class="compulsory-field">*</span></label>
                        <input type="date" class="form-control p-3" id="dob">
                    </div>

                    <div class="mb-3">
                        <label for="studentMobile" class="form-label text-uppercase fw-semibold">Student Mobile No <span class="compulsory-field">*</span></label>
                        <input type="tel" class="form-control p-3" id="studentMobile" placeholder="Enter mobile number">
                    </div>

                    <div class="mb-3">
                        <label for="parentMobile" class="form-label text-uppercase fw-semibold">Parent Mobile No <span class="compulsory-field">*</span></label>
                        <input type="tel" class="form-control p-3" id="parentMobile" placeholder="Enter parent's mobile number">
                    </div>


                    <div class="mb-3">
                        <label for="schoolName" class="form-label">School Name <span class="compulsory-field">*</span></label>
                        <input type="text" class="form-control" id="schoolName" placeholder="Enter school name">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address <span class="compulsory-field">*</span></label>
                        <textarea class="form-control" id="address" rows="2" placeholder="Enter address"></textarea>
                    </div>



                    <div class="mb-3">
                        <label for="casteCategory" class="form-label">Caste & Category <span class="compulsory-field">*</span></label>
                        <select class="form-select" id="casteCategory">
                            <option selected disabled>Select Caste & Category</option>
                            <option>General</option>
                            <option>OBC</option>
                            <option>SC</option>
                            <option>ST</option>
                            <option>VJNT</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="course" class="form-label">Course <span class="compulsory-field">*</span></label>
                        <select class="form-select" id="course">
                            <option selected disabled>Select Course</option>
                            <option>Medical RET-2025</option>
                            <option>Engineering RET-2025</option>
                            <option>NDA RDET-2025</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="modeOfExam" class="form-label">Mode of Exam <span class="compulsory-field">*</span></label>
                        <select class="form-select" id="modeOfExam">
                            <option selected disabled>Select Exam Mode</option>
                            <option>ONLINE</option>
                            <option>OFFLINE</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="district" class="form-label">District <span class="compulsory-field">*</span></label>
                        <select class="form-select" id="district" onchange="updateTaluka()">
                            <option selected disabled>Select District</option>
                            <option>Beed</option>
                            <option>Ahmadnagar</option>
                            <option>Hingoli</option>
                            <option>Yavatmal</option>
                            <option>Washim</option>
                            <option>Jalna</option>
                            <option>Dharashiv</option>
                            <option>Latur</option>
                            <option>Parbhani</option>
                            <option>Solapur</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="taluka" class="form-label">Taluka <span class="compulsory-field">*</span></label>
                        <select class="form-select" id="taluka">
                            <option selected disabled>Select Taluka</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="centre" class="form-label">Centre Name & City <span class="compulsory-field">*</span></label>
                        <select class="form-select" id="centre">
                            <option selected disabled>Select Centre</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="username" class="form-label">Username <span class="compulsory-field">*</span></label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password <span class="compulsory-field">*</span></label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password">
                    </div>

                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Confirm Password <span class="compulsory-field">*</span></label>
                        <input type="password" class="form-control" id="confirm-password" placeholder="Confirm password">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

    <footer>

    </footer>

    <!-- SCRIPTS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        const talukaData = {
            "Beed": ["Ambejogai", "Majalgaon", "Parali", "Georai", "Aashti", "Kej", "Patoda"],
            "Ahmadnagar": ["Jamkhed", "Karjat", "Kopargaon", "Shrirampur", "Shirdi", "Sangamner", "Pathardi"],
            "Hingoli": ["Hingoli", "Sengaon", "Vasmat"],
            "Yavatmal": ["Pusad"],
            "Washim": ["Washim"],
            "Jalna": ["Partur"],
            "Dharashiv": ["Dharashiv", "Omerga", "Bhoom", "Paranda", "Washi"],
            "Latur": ["Ahemadpur", "Udgir", "Nilanga", "Jalkot", "Latur"],
            "Parbhani": ["Parbhani", "Sonpeth", "Gangakhed", "Manvat", "Selu", "Jintur", "Pathari", "Purna"],
            "Solapur": ["Solapur", "Akkalkot", "Kurudwadi", "Modnimb", "Pandharpur", "Karmala", "Tembhurni", "Mangalvedha"]
        };

        const centreData = {
            "Beed": [
                "BEED – श्री शिवाजी विद्यालय पिंगळे नगर कॅनल रोड बीड",
                "AMBEJOGAI - राजश्री शाहू अद्यापक महाविद्यालय, M.I.T. स्कूल बिल्डिंग, मोरेवाडी पाण्याची टाकी लातूर-आंबेजोगाई रोड, आंबेजोगाई",
                "MAJALGAON - श्री सिद्धेश्वर माध्यमिक विद्यालय डॉ.बाबासाहेब आंबेडकर चौक माजलगाव जिल्हा बीड",
                "PARALI- भेळ सेकंडरी CBSC स्कूल, शक्तीकुंज वसाहत T.P.S. कॉलनी, परळी, जिल्हा बीड",
                "GEORAI- जिल्हा परिषद माध्यमिक शाळा, कोल्हेर रोड,गेवराई",
                "AASHTI - श्री गणेश माध्यमिक विद्यालय,बस स्टँड जवळ नगर रोड,आष्टी",
                "KEJ - स्वामी विवेकानंद विद्यामंदिर केज बस स्टॅन्ड जवळ, केज",
                "PATODA - रवी क्लासेस,क्रांती नगर, तहसील कार्यालय जवळ, पाटोदा"
            ],
            "Ahmadnagar": [
                "JAMKHED - खेमानंद इंग्लिश स्कूल खर्डा रोड जामखेड",
                "KARJAT - श्री सद्गुरु उच्च माध्यमिक कन्या विद्यालय, कुळधरण रोड बस स्टॅन्ड जवळ कर्जत",
                "KOPARGAON - श्रीमान गोकुळचंदजी विद्यालय कोपरगाव गोकुळचंदजी ठोळे मार्ग कोपरगाव",
                "SHRIRAMPUR - कर्मशी जेठाभाई सोमैया हायस्कूल व कनिष्ठ महाविद्यालय श्रीरामपूर",
                "SHIRDI - श्री साई निर्माण इंग्लिश मीडियम स्कूल, विमानतळ रोड शिर्डी",
                "SANGAMNER - भाऊसाहेब गुंजाळ पाटील सह्याद्री विद्यालय बसस्टॅन्ड जवळ संगमनेर",
                "PATHARDI - संत ज्ञानेश्वर माध्यमिक उच्च माध्यमिक विद्यालय पंचायत समिती पाथर्डी च्या बाजूस पाथर्डी"
            ],
            "Hingoli": [
                "HINGOLI – भारतीय विद्या मंदिर,श्रीमती शांताबाई मुंजाजी दराडे माध्यमिक विद्यालय ,पोस्ट ऑफिस रोड हिंगोली",
                "SENGAON - जिल्हा परिषद प्रशाळा सेनगाव, सेनगाव बस स्टँड च्या समोर जिल्हा परिषद रोड, सेनगाव, हिंगोली",
                "VASMAT – बहिर्जी स्मारक विद्यालय, मोंढा रोड, वसमत, जिल्हा हिंगोली"
            ],
            "Yavatmal": ["Pusad - राणी लक्ष्मीबाई विद्यालय , तगल पल्लेवार ले आउट , मोती नगर, पुसद"],
            "Washim": ["WASHIM - श्रीमती मालतीबाई सरनाईक विद्यालय बस स्टॅन्ड समोर,वाशिम"],
            "Jalna": ["PARTUR - विवेकानंद प्राथमिक व माध्यमिक विद्यालय, उपविभागीय अधिकारी सार्वजनिक बांधकाम विभाग च्या समोर, परतुर"],

            "Dharashiv": [
                "DHARASHIV - व्यंकटेश महाजन सीनियर कॉलेज संजा रोड धाराशिव",
                "OMARGA - आदर्श विद्यालय, पंचायत समितीच्या पाठीमागे आदर्श विद्यालय, उमरगा",
                "BHOOM - रवींद्र हायस्कूल, भूम",
                "PARANDA - महात्मा गांधी विद्यालय, एसटी डेपो जवळ,परांडा",
                "WASHI - विद्या भवन हायस्कूल,कळम"
            ],
            "Latur": [

                "AHEMADPUR - यशवंत विद्यालय अहमदपूर",
                "UDGIR - लाल बहादूर शास्त्री विद्यालय कॅप्टन चौक उदगीर",
                "NILANGA - इंदिरा माध्यमिक व उच्च माध्यमिक विद्यालय निलंगा",
                "JALKOT - गुरुदत्त विद्यालय जळकोट",
                "LATUR - RELIANCE LATUR PATTERN, AMBEJOGAI ROAD, LATUR"

            ],
            "Parbhani": [
                "PARBHANI - शारदा माध्यमिक विद्यालय, महाराणा प्रताप चौक गव्हर्नमेंट हॉस्पिटल च्या शेजारी परभणी",
                "SONPETH - श्री महालिंगेश्वर माध्यमिक व उच्च माध्यमिक विद्यालय, सोनपेठ गंगाखेड रोड ग्रामीण रुग्णालयाच्या जवळ, सोनपेठ",
                "GANGAKHED - वेंकटेश माध्यमिक व उच्च माध्यमिक विद्यालय गंगाखेड",
                "MANVAT - नेताजी सुभाष माध्यमिक व उच्च माध्यमिक विद्यालय, छत्रपती शिवाजी महाराज चौक जवळ मानवत",
                "SELU - यशवंत विद्यालय, शास्त्रीनगर, बस स्थानकाच्या समोर,सेलू",
                "JINTUR - सिद्धेश्वर विद्यालय, चिंतामणी पार्कच्या समोर सिद्धेश्वर विद्यालय, जिंतूर",
                "PATHARI - शंकरराव चव्हाण माध्यमिक व उच्च माध्यमिक विद्यालय, नखाते पेट्रोल पंपाच्या समोरचा रोड, नरसिंह कॉलनी माजलगाव रोड, पाथरी",
                "PURNA - अभिनव विद्या विहार प्राथमिक शाळा, एकलारे पेट्रोल पंपाच्या शेजारी, पूर्ण"

            ],
            "Solapur": [
                "SOLAPUR - छत्रपती शिवाजी प्रशाला, प्रभात टॉकीज समोर सोलापूर",
                "AKALKOT - मंगलूर हायस्कूल अक्कलकोट",
                "KURUDWADI - नूतन विद्यालय, पंचायत समितीच्या पाठीमागे कुरूडवाडी, तालुका माढा, सोलापूर",
                "MODNIMB - श्री उमा विद्यालय,मोडनिंब",
                "PANDHARPUR - मातोश्री ईश्वराम्मा विद्यालय व कनिष्ठ महाविद्यालय, पंढरपूर",
                "KARMALA - श्री कमलादेवी शिक्षण प्रसारक मंडळ गुरुकुल पब्लिक स्कूल, श्री देवीचामाळ पांडे रोड, करमाळा",
                "TEMBHURNI - गुरुकुल पब्लिक स्कूल, जनता विद्यालय आणि ज्युनिअर कॉलेज, अकलूज रोड, टेंभुर्णी",
                "MANGALVEDHA - जवाहरलाल शेतकी हायस्कूल, नवीन आठवडा बाजार, शिवप्रेमी चौक, मंगळवेढा"
            ]
        };

        function updateTaluka() {
            const district = document.getElementById("district").value;
            const talukaSelect = document.getElementById("taluka");
            talukaSelect.innerHTML = '<option selected disabled>Select Taluka</option>';
            if (talukaData[district]) {
                talukaData[district].forEach(taluka => {
                    let option = document.createElement("option");
                    option.textContent = taluka;
                    talukaSelect.appendChild(option);
                });
            }
            updateCentre();
        }

        function updateCentre() {
            const district = document.getElementById("district").value;
            const centreSelect = document.getElementById("centre");
            centreSelect.innerHTML = '<option selected disabled>Select Centre</option>';
            if (centreData[district]) {
                centreData[district].forEach(centre => {
                    let option = document.createElement("option");
                    option.textContent = centre;
                    centreSelect.appendChild(option);
                });
            }
        }




        document.querySelector("form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission

            let isValid = true;
            let errorMessage = "";

            // Get input values
            const studentName = document.getElementById("studentName").value.trim();
            const motherName = document.getElementById("motherName").value.trim();
            const dob = document.getElementById("dob").value;
            const studentMobile = document.getElementById("studentMobile").value.trim();
            const parentMobile = document.getElementById("parentMobile").value.trim();
            const schoolName = document.getElementById("schoolName").value.trim();
            const address = document.getElementById("address").value.trim();
            const casteCategory = document.getElementById("casteCategory").value;
            const course = document.getElementById("course").value;
            const modeOfExam = document.getElementById("modeOfExam").value;
            const district = document.getElementById("district").value;
            const taluka = document.getElementById("taluka").value;
            const centre = document.getElementById("centre").value;
            const username = document.getElementById("username").value.trim();
            const password = document.getElementById("password").value.trim();

            // Validation for form values
            if (studentName === "") {
                errorMessage += "Student Name is required.\n";
                isValid = false;
            }
            if (motherName === "") {
                errorMessage += "Mother Name is required.\n";
                isValid = false;
            }
            if (dob === "") {
                errorMessage += "Date of Birth is required.\n";
                isValid = false;
            }
            if (studentMobile === "" || !/^\d{10}$/.test(studentMobile)) {
                errorMessage += "Enter a valid 10-digit Student Mobile No.\n";
                isValid = false;
            }
            if (parentMobile === "" || !/^\d{10}$/.test(parentMobile)) {
                errorMessage += "Enter a valid 10-digit Parent Mobile No.\n";
                isValid = false;
            }
            if (schoolName === "") {
                errorMessage += "School Name is required.\n";
                isValid = false;
            }
            if (address === "") {
                errorMessage += "Address is required.\n";
                isValid = false;
            }
            if (casteCategory === "Select Caste & Category") {
                errorMessage += "Please select a Caste & Category.\n";
                isValid = false;
            }
            if (course === "Select Course") {
                errorMessage += "Please select a Course.\n";
                isValid = false;
            }
            if (modeOfExam === "Select Exam Mode") {
                errorMessage += "Please select Mode of Exam.\n";
                isValid = false;
            }
            if (district === "Select District") {
                errorMessage += "Please select a District.\n";
                isValid = false;
            }
            if (taluka === "Select Taluka") {
                errorMessage += "Please select a Taluka.\n";
                isValid = false;
            }
            if (centre === "Select Centre") {
                errorMessage += "Please select a Centre.\n";
                isValid = false;
            }
            if (username === "") {
                errorMessage += "Username is required.\n";
                isValid = false;
            }
            if (password === "" || password.length < 6) {
                errorMessage += "Password is required and must be at least 6 characters long.\n";
                isValid = false;
            }

            // error message or submit the form
            if (!isValid) {
                alert(errorMessage);
            } else {
                alert("Form submitted successfully!");
                event.target.submit();
            }
        });
    </script>
    <!-- -->

</body>

</html>