<?php

declare (strict_types=1);
namespace RectorPrefix202503;

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\MethodCall\RenameMethodRector;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Rector\Renaming\ValueObject\MethodCallRename;
# https://www.php.net/manual/en/book.gmagick.php → https://www.php.net/manual/en/book.imagick.php
return static function (RectorConfig $rectorConfig) : void {
    $rectorConfig->ruleWithConfiguration(RenameClassRector::class, ['Gmagick' => 'Imagick', 'GmagickPixel' => 'ImagickPixel']);
    $rectorConfig->ruleWithConfiguration(RenameMethodRector::class, [new MethodCallRename('Gmagick', 'addimage', 'addImage'), new MethodCallRename('Gmagick', 'addnoiseimage', 'addNoiseImage'), new MethodCallRename('Gmagick', 'annotateimage', 'annotateImage'), new MethodCallRename('Gmagick', 'blurimage', 'blurImage'), new MethodCallRename('Gmagick', 'borderimage', 'borderImage'), new MethodCallRename('Gmagick', 'charcoalimage', 'charcoalImage'), new MethodCallRename('Gmagick', 'chopimage', 'chopImage'), new MethodCallRename('Gmagick', 'commentimage', 'commentImage'), new MethodCallRename('Gmagick', 'compositeimage', 'compositeImage'), new MethodCallRename('Gmagick', 'cropimage', 'cropImage'), new MethodCallRename('Gmagick', 'cropthumbnailimage', 'cropThumbnailImage'), new MethodCallRename('Gmagick', 'cyclecolormapimage', 'cycleColormapImage'), new MethodCallRename('Gmagick', 'deconstructimages', 'deconstructImages'), new MethodCallRename('Gmagick', 'despeckleimage', 'despeckleImage'), new MethodCallRename('Gmagick', 'drawimage', 'drawImage'), new MethodCallRename('Gmagick', 'edgeimage', 'edgeImage'), new MethodCallRename('Gmagick', 'embossimage', 'embossImage'), new MethodCallRename('Gmagick', 'enhanceimage', 'enhanceImage'), new MethodCallRename('Gmagick', 'equalizeimage', 'equalizeImage'), new MethodCallRename('Gmagick', 'flipimage', 'flipImage'), new MethodCallRename('Gmagick', 'flopimage', 'flopImage'), new MethodCallRename('Gmagick', 'frameimage', 'frameImage'), new MethodCallRename('Gmagick', 'gammaimage', 'gammaImage'), new MethodCallRename('Gmagick', 'getcopyright', 'getCopyright'), new MethodCallRename('Gmagick', 'getfilename', 'getFilename'), new MethodCallRename('Gmagick', 'getimagebackgroundcolor', 'getImageBackgroundColor'), new MethodCallRename('Gmagick', 'getimageblueprimary', 'getImageBluePrimary'), new MethodCallRename('Gmagick', 'getimagebordercolor', 'getImageBorderColor'), new MethodCallRename('Gmagick', 'getimagechanneldepth', 'getImageChannelDepth'), new MethodCallRename('Gmagick', 'getimagecolors', 'getImageColors'), new MethodCallRename('Gmagick', 'getimagecolorspace', 'getImageColorspace'), new MethodCallRename('Gmagick', 'getimagecompose', 'getImageCompose'), new MethodCallRename('Gmagick', 'getimagedelay', 'getImageDelay'), new MethodCallRename('Gmagick', 'getimagedepth', 'getImageDepth'), new MethodCallRename('Gmagick', 'getimagedispose', 'getImageDispose'), new MethodCallRename('Gmagick', 'getimageextrema', 'getImageExtrema'), new MethodCallRename('Gmagick', 'getimagefilename', 'getImageFilename'), new MethodCallRename('Gmagick', 'getimageformat', 'getImageFormat'), new MethodCallRename('Gmagick', 'getimagegamma', 'getImageGamma'), new MethodCallRename('Gmagick', 'getimagegreenprimary', 'getImageGreenPrimary'), new MethodCallRename('Gmagick', 'getimageheight', 'getImageHeight'), new MethodCallRename('Gmagick', 'getimagehistogram', 'getImageHistogram'), new MethodCallRename('Gmagick', 'getimageindex', 'getImageIndex'), new MethodCallRename('Gmagick', 'getimageinterlacescheme', 'getImageInterlaceScheme'), new MethodCallRename('Gmagick', 'getimageiterations', 'getImageIterations'), new MethodCallRename('Gmagick', 'getimagematte', 'getImageMatte'), new MethodCallRename('Gmagick', 'getimagemattecolor', 'getImageMatteColor'), new MethodCallRename('Gmagick', 'getimageprofile', 'getImageProfile'), new MethodCallRename('Gmagick', 'getimageredprimary', 'getImageRedPrimary'), new MethodCallRename('Gmagick', 'getimagerenderingintent', 'getImageRenderingIntent'), new MethodCallRename('Gmagick', 'getimageresolution', 'getImageResolution'), new MethodCallRename('Gmagick', 'getimagescene', 'getImageScene'), new MethodCallRename('Gmagick', 'getimagesignature', 'getImageSignature'), new MethodCallRename('Gmagick', 'getimagetype', 'getImageType'), new MethodCallRename('Gmagick', 'getimageunits', 'getImageUnits'), new MethodCallRename('Gmagick', 'getimagewhitepoint', 'getImageWhitePoint'), new MethodCallRename('Gmagick', 'getimagewidth', 'getImageWidth'), new MethodCallRename('Gmagick', 'getpackagename', 'getPackageName'), new MethodCallRename('Gmagick', 'getquantumdepth', 'getQuantumDepth'), new MethodCallRename('Gmagick', 'getreleasedate', 'getReleaseDate'), new MethodCallRename('Gmagick', 'getsamplingfactors', 'getSamplingFactors'), new MethodCallRename('Gmagick', 'getsize', 'getSize'), new MethodCallRename('Gmagick', 'getversion', 'getVersion'), new MethodCallRename('Gmagick', 'hasnextimage', 'hasNextImage'), new MethodCallRename('Gmagick', 'haspreviousimage', 'hasPreviousImage'), new MethodCallRename('Gmagick', 'implodeimage', 'implodeImage'), new MethodCallRename('Gmagick', 'labelimage', 'labelImage'), new MethodCallRename('Gmagick', 'levelimage', 'levelImage'), new MethodCallRename('Gmagick', 'magnifyimage', 'magnifyImage'), new MethodCallRename('Gmagick', 'mapimage', 'mapImage'), new MethodCallRename('Gmagick', 'medianfilterimage', 'medianFilterImage'), new MethodCallRename('Gmagick', 'minifyimage', 'minifyImage'), new MethodCallRename('Gmagick', 'modulateimage', 'modulateImage'), new MethodCallRename('Gmagick', 'motionblurimage', 'motionBlurImage'), new MethodCallRename('Gmagick', 'newimage', 'newImage'), new MethodCallRename('Gmagick', 'nextimage', 'nextImage'), new MethodCallRename('Gmagick', 'normalizeimage', 'normalizeImage'), new MethodCallRename('Gmagick', 'oilpaintimage', 'oilPaintImage'), new MethodCallRename('Gmagick', 'previousimage', 'previousImage'), new MethodCallRename('Gmagick', 'profileimage', 'profileImage'), new MethodCallRename('Gmagick', 'quantizeimage', 'quantizeImage'), new MethodCallRename('Gmagick', 'quantizeimages', 'quantizeImages'), new MethodCallRename('Gmagick', 'queryfontmetrics', 'queryFontMetrics'), new MethodCallRename('Gmagick', 'queryfonts', 'queryFonts'), new MethodCallRename('Gmagick', 'queryformats', 'queryFormats'), new MethodCallRename('Gmagick', 'radialblurimage', 'radialBlurImage'), new MethodCallRename('Gmagick', 'raiseimage', 'raiseImage'), new MethodCallRename('Gmagick', 'readimage', 'readimages'), new MethodCallRename('Gmagick', 'readimageblob', 'readImageBlob'), new MethodCallRename('Gmagick', 'readimagefile', 'readImageFile'), new MethodCallRename('Gmagick', 'reducenoiseimage', 'reduceNoiseImage'), new MethodCallRename('Gmagick', 'removeimage', 'removeImage'), new MethodCallRename('Gmagick', 'removeimageprofile', 'removeImageProfile'), new MethodCallRename('Gmagick', 'resampleimage', 'resampleImage'), new MethodCallRename('Gmagick', 'resizeimage', 'resizeImage'), new MethodCallRename('Gmagick', 'rollimage', 'rollImage'), new MethodCallRename('Gmagick', 'rotateimage', 'rotateImage'), new MethodCallRename('Gmagick', 'scaleimage', 'scaleImage'), new MethodCallRename('Gmagick', 'separateimagechannel', 'separateImageChannel'), new MethodCallRename('Gmagick', 'setCompressionQuality', 'getCompressionQuality'), new MethodCallRename('Gmagick', 'setfilename', 'setFilename'), new MethodCallRename('Gmagick', 'setimagebackgroundcolor', 'setImageBackgroundColor'), new MethodCallRename('Gmagick', 'setimageblueprimary', 'setImageBluePrimary'), new MethodCallRename('Gmagick', 'setimagebordercolor', 'setImageBorderColor'), new MethodCallRename('Gmagick', 'setimagechanneldepth', 'setImageChannelDepth'), new MethodCallRename('Gmagick', 'setimagecolorspace', 'setImageColorspace'), new MethodCallRename('Gmagick', 'setimagecompose', 'setImageCompose'), new MethodCallRename('Gmagick', 'setimagedelay', 'setImageDelay'), new MethodCallRename('Gmagick', 'setimagedepth', 'setImageDepth'), new MethodCallRename('Gmagick', 'setimagedispose', 'setImageDispose'), new MethodCallRename('Gmagick', 'setimagefilename', 'setImageFilename'), new MethodCallRename('Gmagick', 'setimageformat', 'setImageFormat'), new MethodCallRename('Gmagick', 'setimagegamma', 'setImageGamma'), new MethodCallRename('Gmagick', 'setimagegreenprimary', 'setImageGreenPrimary'), new MethodCallRename('Gmagick', 'setimageindex', 'setImageIndex'), new MethodCallRename('Gmagick', 'setimageinterlacescheme', 'setImageInterlaceScheme'), new MethodCallRename('Gmagick', 'setimageiterations', 'setImageIterations'), new MethodCallRename('Gmagick', 'setimageprofile', 'setImageProfile'), new MethodCallRename('Gmagick', 'setimageredprimary', 'setImageRedPrimary'), new MethodCallRename('Gmagick', 'setimagerenderingintent', 'setImageRenderingIntent'), new MethodCallRename('Gmagick', 'setimageresolution', 'setImageResolution'), new MethodCallRename('Gmagick', 'setimagescene', 'setImageScene'), new MethodCallRename('Gmagick', 'setimagetype', 'setImageType'), new MethodCallRename('Gmagick', 'setimageunits', 'setImageUnits'), new MethodCallRename('Gmagick', 'setimagewhitepoint', 'setImageWhitePoint'), new MethodCallRename('Gmagick', 'setsamplingfactors', 'setSamplingFactors'), new MethodCallRename('Gmagick', 'setsize', 'setSize'), new MethodCallRename('Gmagick', 'shearimage', 'shearImage'), new MethodCallRename('Gmagick', 'solarizeimage', 'solarizeImage'), new MethodCallRename('Gmagick', 'spreadimage', 'spreadImage'), new MethodCallRename('Gmagick', 'stripimage', 'stripImage'), new MethodCallRename('Gmagick', 'swirlimage', 'swirlImage'), new MethodCallRename('Gmagick', 'thumbnailimage', 'thumbnailImage'), new MethodCallRename('Gmagick', 'trimimage', 'trimImage'), new MethodCallRename('Gmagick', 'writeimage', 'writeImage'), new MethodCallRename('GmagickPixel', 'getcolor', 'getColor'), new MethodCallRename('GmagickPixel', 'getcolorcount', 'getColorCount'), new MethodCallRename('GmagickPixel', 'getcolorvalue', 'getColorValue'), new MethodCallRename('GmagickPixel', 'setcolor', 'setColor'), new MethodCallRename('GmagickPixel', 'setcolorvalue', 'setColorValue')]);
};
