<?php 


/*
* Creates Array of filenames for all images for the given directory
* Optionaly you can provide name of cover image (ie. 'cover.jpg') which will be saved as first item in the array
*
* by Gabriel Garus
* *****
*
*/


function getImages($path = null,$coverImg = null){

/**** Config ****/


// Default path to be scanned - if not provided, it scans its' own directory

$defaultPath = realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR;

// files allowed
// you can add more extensions which will be included in the array

$files = array();
$files[] = 'bmp';
$files[] = 'jpg';
$files[] = 'gif';
$files[] = 'png';


/********** end of config ***************/



// Define basic variables   
$thePath = is_null($path) ? $defaultPath: $path; 
$coverro = is_null($coverImg) ? ' ': $coverImg;



//check if its a directory - if path is correct
if(is_dir($thePath))
        {
            
        // Scan directory
        $dire = scandir($thePath);

        $listimages = array();


        // Find Cover Image and add it as first item in the Array
        foreach ($dire as $key => $file) {

            if(is_file($thePath.$file)){ //check if item is a file
                if ($file == $coverro){
                    $listimages[] = $file;
                                    }
                                    }
                                        } // end foreach

        // Add other files into array
        foreach ($dire as $key => $file) {
            if(is_file($thePath.$file)){
             if ($file != $coverro){ // don't add cover
                    $ex_file = explode('.', $file);
                    $extension = $ex_file[1];
                    if (in_array($extension, $files)){
                    $listimages[] = $file;
                }
             }
         }
        }// end foreach

        }

else { // If path is not directory
echo $thePath;
echo ' <br /> is NOT Directorry';
die();  
}


return $listimages;

} //end of function


