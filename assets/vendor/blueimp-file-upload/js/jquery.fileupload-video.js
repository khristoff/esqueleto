(function(factory){'use strict';if(typeof define==='function'&&define.amd){define(['jquery','load-image','./jquery.fileupload-process'],factory);}else if(typeof exports==='object'){factory(require('jquery'),require('load-image'));}else{factory(window.jQuery,window.loadImage);}}(function($,loadImage){'use strict';$.blueimp.fileupload.prototype.options.processQueue.unshift({action:'loadVideo',prefix:true,fileTypes:'@',maxFileSize:'@',disabled:'@disableVideoPreview'},{action:'setVideo',name:'@videoPreviewName',disabled:'@disableVideoPreview'});$.widget('blueimp.fileupload',$.blueimp.fileupload,{options:{loadVideoFileTypes:/^video\/.*$/},_videoElement:document.createElement('video'),processActions:{loadVideo:function(data,options){if(options.disabled){return data;}
var file=data.files[data.index],url,video;if(this._videoElement.canPlayType&&this._videoElement.canPlayType(file.type)&&($.type(options.maxFileSize)!=='number'||file.size<=options.maxFileSize)&&(!options.fileTypes||options.fileTypes.test(file.type))){url=loadImage.createObjectURL(file);if(url){video=this._videoElement.cloneNode(false);video.src=url;video.controls=true;data.video=video;return data;}}
return data;},setVideo:function(data,options){if(data.video&&!options.disabled){data.files[data.index][options.name||'preview']=data.video;}
return data;}}});}));