 <?php
    function readini($sFilename, $sSection, $sKey) {
    	$sFileHandle = fopen($sFilename, "r");
    	if (!$sFileHandle) {
    		die("<b>Error:</b> Unable to open file ".$sFilename.".");
    	}
    	if (filesize($sFilename) > 0) {
    		$sFileContents = fread($sFileHandle, filesize($sFilename));
    	}
    	if ($sFileCont
    <p>HTML</p>
    <p>CSS</p>
    <p>Visual Basic 6.0</p>
    <p>VB.Net (Basic & C#)</p>
    <p>Graphics Design (Photoshop)</p>
    <br />
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
    	return trim(substr($sFileData[$returnLine], (strpos($sFileData[$returnLine], "=")+1)));
    }
    function writeini($sFilename, $sSection, $sKey, $sValue) {
    	$sFileHandle = fopen($sFilename, "r");
    	if (!$sFileHandle) {
    		die("<b>Error:</b> Unable to open ".$sFilename.".");
    	}
    	if (filesize($sFilename) > 0) {
    		$sFileContents = fread($sFileHandle, filesize($sFilename));
    	}
    	if ($sF
    		if (count($z) >= 2) {
    			if ($z[0] == $sKey && $sectionStart >= 0 && $sectionEnd == -1 && substr($sFileData[$i], 0, 1) != ";") {
    				$returnLine = $i;
    			}
    		}
    		if ($x == 0 && $x !== FALSE && $sectionStart == -1) {
    			$sectionStart = ($i + 1);
    		}
    	}
    	if ($sectionEnd == -1) {
    		$sectionEnd = (count($sFileData)-1);
    	}
    	$newfile = "";
    	if ($returnLine > -1) {
    		$sFileData[$returnLine] = $sKey."=".$sValue;
    		for ($i = 0; $i < count($sFileData); $i++) {
    			$
    	$sFileWrite = fwrite($sFileHandle, trim($newfile));
    	if ($sFileWrite === FALSE) {
    		die("<b>Error:</b> Unable to write data to file ".$sFilename.".");
    	}
    }
    ?>
    <div id="content">
    <h2>About ME!</h2>
    <h3>Personal Information</h3>
    <h2>Kowshar Ahmed</h2>
    <h3>CEO & Chief programmer of iTech System</h3>
    <p>Date of Birth: 12 June 1983</p>
    <p>Nationality: Bangladeshi</p>
    <br />
    <h2>Technical Skills and Experiences</h2>
    <p>PHP</p>
    <p>SQL</p>
    <p>HTML</p>
    <p>CSS</p>
    <p>Visual Basic 6.0</p>
    <p>VB.Net (Basic & C#)</p>
    <p>Graphics Design (Photoshop)</p>
    <br />
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>