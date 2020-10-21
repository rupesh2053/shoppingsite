<style>
	.dropbtn{
		padding: 16px;
		font-size: 16px;
		border: none;
		cursor: pointer;
	}
	#myInput{
		box-sizing: border-box;
		background-image: url('searchicon.png');
		background-repeat: no-repeat;
		font-size: 16px;
		height: 40px;
		width: 400px;
		border: none;
	}
	#myInput:focus{
		outline: 3px solid #ddd;
	}
	.dropdown{
		position: relative;
		display: inline-block;
	}
	.dropdown-content{
		display: none;
		position: absolute;
		background-color: #f6f6f6;
		width: 397px;
		overflow: auto;
		border: 1px solid #ddd;
	}
	.dropdown-content a{
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}
	.dropdown a:hover{
		background-color: #ddd;
	}
	.show{
		display: block;
	}
</style>

	<div class="dropdown">
	<input type="text" onclick = "myFunction()" class = "dropbtn" placeholder="search..." id = "myInput" onkeyup="filterFunction()">

	<div class = "dropdown-content" id = "myDropdown">
	<a id="about">Nokia</a>
	<a id="about">Samsung</a>
	<a id="about">Huawei</a>
	<a id="about">Apple</a>
	<a id="about">Sony</a>
	<a id="about">LG</a>
	<a id="about">HTC</a>
	<a id="about">Motorola</a>
	<a id="about">Lenovo</a>
	</div>
	</div>
	<script>
		function myFunction(){
			document.getElementById("myDropdown").classList.toggle("show");
		}
		function filterFunction(){
			var input, filter, ul, li, a, i;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			div = document.getElementById("myDropdown");
			a = div.getElementsByTagName("a");
			for(i = 0; i < a.length; i++){
				txtValue = a[i].textContent || a[i].innerText;
				if(txtValue.toUpperCase().indexOf(filter)>-1){
					a[i].style.display = "";
				}else{
					a[i].style.display = "none";
				}
			}
		}
	</script>