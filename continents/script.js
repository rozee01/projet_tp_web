const imageInput = document.getElementById('bg-input');
        const bgImage = document.querySelector('.background');

        imageInput.addEventListener('change', (event) => {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener('load', () => {
                    bgImage.style.backgroundImage = `url(${reader.result})`;
                });

                reader.readAsDataURL(file);
            }
        });
        document.getElementById('image1-upload').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('Destination1').setAttribute('src', e.target.result);
                document.getElementById('Destination1').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
        document.getElementById('image2-upload').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('Destination2').setAttribute('src', e.target.result);
                document.getElementById('Destination2').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
        document.getElementById('image3-upload').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('Destination3').setAttribute('src', e.target.result);
                document.getElementById('Destination3').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
        document.getElementById('image4-upload').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('Destination4').setAttribute('src', e.target.result);
                document.getElementById('Destination4').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
        document.getElementById('image5-upload').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('Destination5').setAttribute('src', e.target.result);
                document.getElementById('Destination5').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
        document.getElementById('image6-upload').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('Destination6').setAttribute('src', e.target.result);
                document.getElementById('Destination6').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
        document.getElementById('image1f-upload').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('Food1').setAttribute('src', e.target.result);
                document.getElementById('Food1').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
        document.getElementById('image2f-upload').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('Food2').setAttribute('src', e.target.result);
                document.getElementById('Food2').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
        document.getElementById('image3f-upload').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('Food3').setAttribute('src', e.target.result);
                document.getElementById('Food3').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
        document.getElementById('image4f-upload').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('Food4').setAttribute('src', e.target.result);
                document.getElementById('Food4').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
        document.getElementById('image5f-upload').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('Food5').setAttribute('src', e.target.result);
                document.getElementById('Food5').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
        document.getElementById('myInputchange1').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('myImagechange1').setAttribute('src', e.target.result);
                document.getElementById('myImagechange1').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
        document.getElementById('myInputchange2').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('myImagechange2').setAttribute('src', e.target.result);
                document.getElementById('myImagechange2').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
        document.getElementById('myInputchange3').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('myImagechange3').setAttribute('src', e.target.result);
                document.getElementById('myImagechange3').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
        document.getElementById('video-upload').addEventListener('change', function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('video-preview').setAttribute('src', e.target.result);
                document.getElementById('video-preview').style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });