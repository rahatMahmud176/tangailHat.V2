<?php
use Intervention\Image\Facades\Image;

function imageUpload($image,$title,$firstSize,$secondSize,$directory)
{    
     $imageExtension = 'webp';
     $imageName      = str_replace([' ','(',')','/',':',';'],'-',$title).'-'.time().'.'.$imageExtension; 
     Image::make($image)->encode('webp', 90)->resize($firstSize, $secondSize)->save($directory.$imageName);
     return $directory.$imageName; 
} 
