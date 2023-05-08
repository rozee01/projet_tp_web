
<style>
    .container.form{
	position: relative;
    margin-top : 100px ;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.contact-box{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left {
	position: relative;
	height: 100%;
}

.left::before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: url("") no-repeat center;
	background-size: cover;
}

#image-preview {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 100%;
	height: 100%;
}

#image-upload {
	position: absolute;
	top: calc(50% + 50px);
	left: 50%;
	transform: translateX(-50%);
}

.btn-left {
	position: absolute;
	top: calc(50% - 20px);
	left: 50%;
	transform: translateX(-50%);
    color: #fff;
    background-color: #ab1b3f;

}


.right{
	padding: 25px 40px;
}

h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #ab1b3f;
}

.field{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 150px;
}

.btn-right{
	width: 100%;
	padding: 0.5rem 1rem;
	background-color: #ab1b3f;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
    background-color: #f49696 ;
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}


</style>
<div class="container form">
<form action="SuggestCountryProcess.php" method="POST" enctype="multipart/form-data">
		<div class="contact-box my-form">
			<div class="left">
				<img id="image-preview" src="" alt="Preview Image" width="100%">
				<input type="file" name="image" id="image-upload" style="display:none">
				<button type="button" class="btn  btn-left" onclick="document.getElementById('image-upload').click()">Select Image</button>
			</div>
			<div class="right">
				<h2>Suggest a country ! </h2>
                <input type="hidden" name="continent" value="<?php echo $continentName; ?>">
				<input type="text" class="field" placeholder="Name of the country" name="name">
				<textarea placeholder="Add some description" class="field" name="description"></textarea>
				 <button class="btn btn-right" id="send-btn">Send</button>
			</div>
		</div>
</form>
</div>
<script>
document.getElementById('image-upload').addEventListener('change', function() {
	var reader = new FileReader();
	reader.onload = function(e) {
		document.getElementById('image-preview').setAttribute('src', e.target.result);
	}
	reader.readAsDataURL(this.files[0]);
});

document.getElementById('send-btn').addEventListener('click', function() {
	document.getElementsByTagName('form')[0].submit();
});
function showForm() {
    var formContainer = document.getElementById("form-container");
    formContainer.style.display = "block";
    
}
</script>
    