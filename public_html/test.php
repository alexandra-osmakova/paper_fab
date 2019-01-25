<?php
    print_r($_FILES);
?>
<html>
<body>
<form action="test.php" method="post" enctype="multipart/form-data">
    <div class="body" id="files">
        <div class="item" id="1">
            <div class="number">1</div>
            <div class="d_number">Договор №12345</div>
            <div class="file">
                <a href="">
                    <div class="icon">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="478.353px" height="478.354px"
                             viewBox="0 0 478.353 478.354"
                             style="enable-background:new 0 0 478.353 478.354;"
                             xml:space="preserve">
<g>
    <path d="M462.854,224.022L248.397,438.461c-53.216,53.19-139.781,53.19-192.984,0c-53.219-53.214-53.219-139.779,0-192.993
		L269.851,31.053c41.379-41.404,108.72-41.404,150.126,0c41.369,41.371,41.369,108.717,0,150.089L248.751,352.315
		c-14.26,14.482-33.313,22.478-53.676,22.565c-40.674,0.178-76.26-35.357-76.111-76.11c0.072-20.315,8.116-39.386,22.568-53.657
		L312.737,73.934l21.441,21.44L162.621,266.908c-8.545,8.56-13.285,19.863-13.329,31.983c-0.105,24.433,21.235,45.779,45.667,45.667
		c12.099-0.032,23.457-4.77,31.998-13.329l171.575-171.531c29.557-29.554,29.557-77.648,0-107.208
		c-29.589-29.554-77.679-29.554-107.235,0L76.854,266.908c-41.388,41.369-41.388,108.715,0,150.116
		c41.374,41.374,108.717,41.374,150.103,0l214.462-214.442L462.854,224.022z"/>
</g>
</svg>
                    </div>
                    <div class="filename">doc.doc</div>
                </a>
            </div>
            <button type="button" class="delete" onclick="deleteFile()">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;"
                     xml:space="preserve">
	<g id="delete">
        <path d="M76.5,408c0,28,22.9,51,51,51h204c28,0,51-23,51-51V102h-306V408z M408,25.5h-89.2L293.2,0H165.8l-25.5,25.5H51v51h357
			V25.5z"/>
    </g>
</svg>
            </button>
        </div>
        <button type="button" class="btn" onclick="addFile()">+</button>
    </div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

</script>
</body>
</html>
