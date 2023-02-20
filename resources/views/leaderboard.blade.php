<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$name->name}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="icon" type="image/png" sizes="32x32" href="../public/santaclaus.png">
        <link rel="stylesheet" type="text/css" href="./css/app.css">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<style>
 .delbutton {
    width:35px;

}

.delclose {
width:100%;
}
button:hover{
        color: #ffa1e3;
    }
input:hover{
    border-color: #ffa1e3;
    border-style: solid;
    border-width:2px;
}
a:hover{
  border-color: #ffa1e3;
}
.savebutton {

    width:40px;

}
#topleftbutton{
    width:50px;
}
.saveform{

}
.saveclose {
width:100%;

}
.saveclosed {
width:10px;

}
    #block{
        margin-top: 3%;
        
        border-top-style: solid;
        border-top-color: yellow;
        border-top-width: 5px;

    
        padding-top:2%;
   
        min-height: 300px;
 

  overflow: hidden;
  padding-bottom:2%;
    }
    #listElements{
        
      float:left;
     
      
    }
    .top-left-button {
  position: fixed;
top:1%;
left:2%;
color: white;
width:80px;
}
#formelements{
    margin-left:10%;

       float:left;



}
#categoryelement{
        margin-left: 25%;
        height: 100px;

}
#topPage{
    text-align: center;

}
#flexible{

}
#Cattitle{

        width: 500px;
        float:left;

 

}
#CatBot{

        margin-left: 5%;

        
        margin-bottom: 1%;
}
#listPart{
    margin-top: 15%;
    margin-bottom: 15%;
    padding-top:10%;
    border-top-style: dashed;
        border-top-color: yellow;
        border-top-width: 2px;
  
    width: 500px;
}
#bottomPart{

        width:1000px;
}
#buttonelement{


}
#buttonelements{

    float:right;

}
#buttons{

}
a:hover{
  color: #ffa1e3;
}
.top-left-button2{
  position: fixed;
top:1%;
left:8%;
color: white;
width:80px;
}
.top-left-button3{
  position: fixed;
top:1%;
left:11%;
color: white;
width:80px;
}
    </style>
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
       
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white" style="background-color: #111827;">
        <a href="/" class="top-left-button" ><x-icons.arrow-circle-left :size="20"/><a>
        <div id="interior"style="color: white">
        <div id="topPage">
            <h1 style="font-size: 300%; ">{{$name->name}} </h1>
            <h1 style="font-size: 150%;">Category View </h1> 
            
            <a href="{{route('openTags',$name->id.'%0')}}"> <h1 style="font-size: 100%; margin-bottom: 1%; font-style: italic;">View Tags</h1> </a>
           <!-- <a href="{{route('openRankings',$name->id)}}">  <h1 style="font-size: 100%; margin-bottom: 5%;">View Rankings</h1> </a>-->
            <div id ="flexible" style="align-items: center;">
            <?php
            $x = 0
            ?>
         
            @foreach ($categories as $category)
            <div id="categoryelement">
            <?php
           $x++
            ?>
     
          <div id="Cattitle">
   
            <button onclick="scrollToElement({{$category->name}})" style="font-size: 200%; ">{{$x}}. {{$category->name}}</button> 
            <script>
    function scrollToElement(var) {
  document.getElementById(var).scrollIntoView({ behavior: "smooth" });
  console.log(var);
}
    </script>
            </div> 
            <span id="CatBot">
            <form method="post" style="float:right" action="{{route('deleteCategory',$category->id)}}" accept-charset="UTF-8">{{csrf_field()}} <button type="submit"class="savebutton"><x-icons.trash :size="20" id="delclose"/></button> </form>
            <button style="float:right" type="submit"class="savebutton"id="edit{{$category->id}}"><x-icons.pencil :size="20"/></button> 
            <form method="post" id="names{{$category->id}}" style="float:right;display: none; "action="{{route('editCategory',$category->id)}}" accept-charset="UTF-8">{{csrf_field()}} 
   
           
            <input style="color:black;"  type="text" name="CategoryName" required> 
            <button type="submit"class="savebutton"><x-icons.save :size="20"/></button> 
        </form>
        <script>
document.getElementById("edit{{$category->id}}").addEventListener("click", function() {

if (document.getElementById("names{{$category->id}}").style.display === "none") {
document.getElementById("names{{$category->id}}").style.display = "inline";

} else {
document.getElementById("names{{$category->id}}").style.display = "none";

}
});
  
      </script>  
      </span>  
                <br>
</div>
            @endforeach
            </div>
            <form method="post" id="visible" style="display:none;" action="{{route('saveCategory',$name->id)}}" accept-charset="UTF-8">
          {{csrf_field()}}
            <label for="CategoryName"></label> </br>
            
            <input style="color:black;"id="fo" type="text" placeholder="Category Name..."  value = "" name="CategoryName" required> 
         <button  type="submit" style="color: white; width: 175px; height: 75px;background-color: purple; max-height:25px; margin-left: 20px;"> Create Category </button>  

    
        </form>
        <button class="savebutton"  style="color:green;margin-top:5%;"id="visibly" ><x-icons.plus-circle :size="20"/></button>  
        <script>
document.getElementById("visibly").addEventListener("click", function() {

if (document.getElementById("visible").style.display === "none") {
document.getElementById("visible").style.display = "block";
document.getElementById("visibly").style.color = "red";
} else {
document.getElementById("visible").style.display = "none";

document.getElementById("visibly").style.color = "green";

}
});
  
      </script>
</div>
<div id="bottomPart">
@foreach ($categories as $category)
<div id="block">
<div id="listElements">
            <div id="listParts" style="margin-top:10%;"class="flex" style="align-items: center;">
     
    
            <span id="{{$category->name}}">
            <h1 id="{{$category->name}}"style="font-size: 200%;">{{$category->name}}</h1>

            @foreach ($listItems as $listItem)
            @if($listItem->categoryid == $category->id)
            <div id="listPart">
                <div id="segment">
                @if($listItem->visit == 1)  <button style="font-size:125%; float:left; border-bottom-style: dotted;border-bottom-color: white; border-bottom-width: 1px; margin-right:3%; "class="listcomponent" id="tit{{$listItem->id}}">  {{$listItem->title}} </button>  <a href="https://{{$listItem->url}}" target="_blank"> <x-icons.search-circle style=" width:40px;" :size="0" /></a> @endif
                  @if($listItem->visit != 1)  <button style="font-size:125%; border-bottom-style: dotted;border-bottom-color: white; border-bottom-width: 1px; "class="listcomponent" id="tit{{$listItem->id}}">  {{$listItem->title}} </button> @endif
       
                  <form class="saveform" id="buttit{{$listItem->id}}" style="display: none;" method="post" action="{{route('editTitle',$listItem->id)}}" accept-charset="UTF-8">
            {{csrf_field()}}
           <input type="text"  style="clear: both; padding-left: 2%; margin-bottom: 1%; color:black;" value="{{$listItem->title}}"id="textfield" name="title"/>  <br>  @if($listItem->visit == 1)<input type="text"  style="padding-left: 2%; color:black;" value="{{$listItem->url}}"id="textfield" name="newListItemLink"/>  <br> @endif @if($listItem->visit == 0)<input type="text"  style="padding-left: 2%; color:black;" placeholder="www.link.com" value=""id="textfield" name="newListItemLink"/>  <br> @endif <button type="submit"class="savebutton"><x-icons.save  :size="20" id="saveclose"/></button>  </form>
           
<script>
document.getElementById("tit{{$listItem->id}}").addEventListener("click", function() {

    if (document.getElementById("buttit{{$listItem->id}}").style.display === "none") {
    document.getElementById("buttit{{$listItem->id}}").style.display = "block";
  } else {
    document.getElementById("buttit{{$listItem->id}}").style.display = "none";
  }
});
            </script>
            </div>
             <br>
             <div id="segment">
             <button id="ran{{$listItem->id}}">    RANK: {{$listItem->ranking}}/10 </button> 
             <form class="saveform" id="butran{{$listItem->id}}" style="display: none;" method="post" action="{{route('editRanking',$listItem->id)}}" accept-charset="UTF-8">
            {{csrf_field()}}
            <input style="padding-left: 2%; color:black;" id="textfield" style="color:black;"id="fo" type="number" value="{{$listItem->ranking}}" step="0.01" min="1" max="10" name="ranking" required>   <br> <button type="submit"class="savebutton"><x-icons.save  :size="20" id="saveclose"/></button>  </form>
           
<script>
document.getElementById("ran{{$listItem->id}}").addEventListener("click", function() {

    if (document.getElementById("butran{{$listItem->id}}").style.display === "none") {
    document.getElementById("butran{{$listItem->id}}").style.display = "block";
  } else {
    document.getElementById("butran{{$listItem->id}}").style.display = "none";
  }
});
            </script>
            </div>
             <br>
             <div id="segment">
             <button id="sum{{$listItem->id}}">  DESCRIPTION:{!! ($listItem->summary) !!}</button> 

             <form class="saveform" id="butsum{{$listItem->id}}" style="display: none;" method="post" action="{{route('editSummary',$listItem->id)}}" accept-charset="UTF-8">
            {{csrf_field()}}
            <textarea style="padding-left: 2%; color:black;"id="fo" value="" type="textarea" rows = "4" cols = "40" name="summary" placeholder="Provide a short summary..." required> {{str_replace('<br>', '',($listItem->summary))}}</textarea>  <br> 
          <button type="submit"class="savebutton"><x-icons.save  :size="20" id="saveclose"/></button>  </form>
           
<script>
document.getElementById("sum{{$listItem->id}}").addEventListener("click", function() {

    if (document.getElementById("butsum{{$listItem->id}}").style.display === "none") {
    document.getElementById("butsum{{$listItem->id}}").style.display = "block";
  } else {
    document.getElementById("butsum{{$listItem->id}}").style.display = "none";
  }
});
            </script>
            </div>
            @if(!strlen(str_replace(' ', '', $listItem->tags)) == 0)
             <br> 
             <div id="segment">
             <button id="tag{{$listItem->id}}">TAGS: {{$listItem->tags}} </button> 
             <form class="saveform" id="buttag{{$listItem->id}}" style="display: none;" method="post" action="{{route('editTags',$listItem->id)}}" accept-charset="UTF-8">
            {{csrf_field()}}
            <fieldset id="field{{$listItem->id}}" style=" margin-top:1%;overflow-y: scroll; height: 150px; width: 100px;">
    <legend>TAGS?</legend>

    @foreach ($tags as $tag)
    @if(Str::contains($listItem->tags, $tag->name))<input type="checkbox" name="tags[]" value="{{$tag->name}}" id="{{$tag->name}}" checked>
    <label for="{{$tag->name}}">{{$tag->name}}</label><br>
    @endif
    @if(!Str::contains($listItem->tags, $tag->name))<input type="checkbox" name="tags[]" value="{{$tag->name}}" id="{{$tag->name}}">
    <label for="{{$tag->name}}">{{$tag->name}}</label><br>
    @endif
    @endforeach
   <!-- <input type="checkbox" name="tags[]" value="" id="other{{$listItem->id}}">-->
    <!--<label for="other">Other</label>-->
    <input type="text" name="" id="other_fruit{{$listItem->id}}" placeholder="List Tag Here..." style="color:black;" pattern="[A-Za-z0-9_]+">
    <button type="button" id="add_fruit{{$listItem->id}}">Add Tag</button>
  
  </fieldset>


  <script>
    // checkbox.checked = false;



/*
    document.getElementById("other{{$listItem->id}}").addEventListener("change", function() {
      if (document.getElementById("other{{$listItem->id}}").checked) {
        document.getElementById("other_fruit{{$listItem->id}}").style.display = "block";
        document.getElementById("add_fruit{{$listItem->id}}").style.display = "block";
      } else {
        document.getElementById("other_fruit{{$listItem->id}}").style.display = "none";
        document.getElementById("add_fruit{{$listItem->id}}").style.display = "none";
      }
    });
*/
    document.querySelector("#add_fruit{{$listItem->id}}").addEventListener("click", function() {
      let newFruits = document.querySelector("#other_fruit{{$listItem->id}}").value;
      let labels = document.createElement("label");
      let checkboxs = document.createElement("input");
      //label.style.clear = "both";
      checkboxs.type = "checkbox";
      checkboxs.name = "tags[]";
      checkboxs.checked = true;
      checkboxs.value = newFruits;
      let paras = document.createElement("p");
      paras.appendChild(labels);
      labels.appendChild(checkboxs);
      
      labels.appendChild(document.createTextNode(newFruits));

      let fieldsets = document.querySelector("#field{{$listItem->id}}");
      fieldsets.insertBefore(paras, document.querySelector("#other_fruit{{$listItem->id}}"));
      var objDiv = document.getElementById("field{{$listItem->id}}");
      objDiv.scrollTop = objDiv.scrollHeight;
      document.querySelector("#other_fruit{{$listItem->id}}").value = "";
    });

</script>

          <button type="submit"class="savebutton"><x-icons.save  :size="20" id="saveclose"/></button> 
         </form>
             <script>
document.getElementById("tag{{$listItem->id}}").addEventListener("click", function() {

    if (document.getElementById("buttag{{$listItem->id}}").style.display === "none") {
    document.getElementById("buttag{{$listItem->id}}").style.display = "block";
  } else {
    document.getElementById("buttag{{$listItem->id}}").style.display = "none";
 
  }
});
            </script>
            </div>
            @endif
<br>
            <div id="segment">
 
<button id="cat{{$listItem->id}}"> CATEGORY: {{$category->name}} </button> 
             <form  class="saveform" id="butcat{{$listItem->id}}" style="overflow-y: scroll; height: 150px; width: 200px; display: none; overflow-"method="post" action="{{route('editItemCat',$listItem->id)}}" accept-charset="UTF-8">
            {{csrf_field()}}

            @foreach($categories as $category1 )
            <label>
  @if($category1->id == $category->id)<input type="radio"  name="NewCategory" value="{{$category1->id}}" checked>@endif
  @if($category1->id != $category->id)<input type="radio"  name="NewCategory" value="{{$category1->id}}">@endif
  {{$category1->name}}
</label>
<br>
            @endforeach
   

          <button type="submit"class="savebutton"><x-icons.save  :size="20" id="saveclose"/></button> 
         </form>
         <script>
document.getElementById("cat{{$listItem->id}}").addEventListener("click", function() {

    if (document.getElementById("butcat{{$listItem->id}}").style.display === "none") {
    document.getElementById("butcat{{$listItem->id}}").style.display = "block";
  } else {
    document.getElementById("butcat{{$listItem->id}}").style.display = "none";

  }
});
            </script>
  <br>
               </div>
  

            <br>
             <form method="post" action="{{route('deleteItem',$listItem->id)}}" accept-charset="UTF-8">
            {{csrf_field()}}
            <button type="submit" class="delbutton"><x-icons.trash :size="20" id="delclose"/></button></form>

          </div>
            @endif
            @endforeach
</span>
          
        </div>
</div>

  
<div id="buttonelements">
<div style="display: none;" id="catformdiv{{$category->id}}">
       <div id="formelements">
        <form method="post" action="{{route('addItem',$category->id.'%'.$name->id)}}" accept-charset="UTF-8">
          {{csrf_field()}}
            <label for="listItemName"> Name </label> </br>
            <input style="color:black;"id="fod{{$category->id}}" type="text" placeholder="Name" name="listItemName" required> </br>
            <label for="listItemName"> URL </label> </br>
            <input style="color:black; "id="fods{{$category->id}}" type="text" placeholder="www.link.com" name="listItemLink"> </br>
            <label for="listItemRanking"> Ranking </label> </br>
            <input style="color:black;"id="fo" type="number" value="1" min="1" max="10" step="0.01"name="listItemRanking" required> </br>
            <label for="listItemSummary"> Summary </label> </br>
            <textarea style="color:black;"id="fo" type="textarea" rows = "4" cols = "40" name="listItemSummary" placeholder="Provide a short summary..." required> </textarea><br>
            <fieldset id="catfield{{$category->id}}" style="margin-top:1%;overflow-y: scroll; height: 150px; width: 100px;">
    <legend>TAGS?</legend>
    @foreach ($tags as $tag)
    <input type="checkbox" name="tags[]" value="{{$tag->name}}" id="{{$tag->name}}">
    <label for="{{$tag->name}}">{{$tag->name}}</label><br>
    @endforeach
 <!--  <input type="checkbox" name="" value="" id="other{{$category->id}}">
    <label for="other">Other</label> -->
    <input type="text" name="" id="catotherfruit{{$category->id}}" placeholder="List Tag Here..." style="color:black;" pattern="[A-Za-z0-9_]+">
    <button type="button" onClick="stimulation({{$category->id}})"id="cataddfruit{{$category->id}}" style="">Add Tag</button>

  </fieldset>


  <script>
    // checkbox.checked = false;
/*

    document.getElementById("other{{$category->id}}").addEventListener("change", function() {
      if (document.getElementById("other{{$category->id}}").checked) {
        document.getElementById("other_fruit{{$category->id}}").style.display = "block";
        document.getElementById("add_fruit{{$category->id}}").style.display = "block";
      } else {
        document.getElementById("other_fruit{{$category->id}}").style.display = "none";
        document.getElementById("add_fruit{{$category->id}}").style.display = "none";
      }
    });
*/
//just turn this into a function and pass elements in as parameters if possible

function stimulation(x){

      let newFruit = document.getElementById("catotherfruit" + x).value;
      let label = document.createElement("label");
      let checkbox = document.createElement("input");
      //label.style.clear = "both";
      checkbox.type = "checkbox";
      checkbox.name = "tags[]";
      checkbox.checked = true;
      checkbox.value = newFruit;
      let para = document.createElement("p");
      para.appendChild(label);
      label.appendChild(checkbox);
    
      label.appendChild(document.createTextNode(newFruit));

     // let fieldset = document.getElementById("field"+x);
     try{
      document.getElementById("catfield"+x).insertBefore(para, document.getElementById("catotherfruit" + x));
     }catch(e){
      document.getElementById("catfield"+x).appendChild(para);
     }
     var objDiv = document.getElementById("catfield"+x);
      objDiv.scrollTop = objDiv.scrollHeight;
      document.getElementById("catotherfruit" + x).value = "";
  


}
/*
    document.getElementById("addfruit{{$category->id}}").addEventListener("click", function() {
      let newFruit = document.getElementById("otherfruit{{$category->id}}").value;
      let label = document.createElement("label");
      let checkbox = document.createElement("input");
      //label.style.clear = "both";
      checkbox.type = "checkbox";
      checkbox.name = "tags[]";
      checkbox.value = newFruit;
      let para = document.createElement("p");
      para.appendChild(label);
      label.appendChild(checkbox);
    
      label.appendChild(document.createTextNode(newFruit));

      let fieldset = document.getElementById("field{{$category->id}}");
      fieldset.insertBefore(para, document.getElementById("otherfruit{{$category->id}}"));
      
      document.getElementById("otherfruit{{$category->id}}").value = "";
    });
*/
</script>

</div>
<div id="buttonelement" class="element{{$category->id}}">
         <button id="visibled{{$category->id}}"  type="submit" style="float:right; display:none; color: white; width: 175px; height: 75px;background-color: purple; max-height:25px; "> Create Item </button>  
         <script>
            document.getElementById('fod{{$category->id}}').value = '';
document.getElementById('fod{{$category->id}}').addEventListener('input', function() {
  document.getElementById('visibled{{$category->id}}').style.display = 'inline';

});

      </script>
   
        </form>
</div>
</div>

<br>
<br>
        <div id="buttonelement">
        <button style="color: white; width: 175px; height: 75px;background-color: green; max-height:25px;" id="vision{{$category->id}}"> Add Item </button>

        <script>

document.getElementById("vision{{$category->id}}").addEventListener("click", function() {
  if (document.getElementById("catformdiv{{$category->id}}").style.display === "none") {
    document.getElementById("catformdiv{{$category->id}}").style.display = "block";
   // 
    document.getElementById("vision{{$category->id}}").innerHTML = "Hide";
   // document.getElementById("other{{$category->id}}").checked = false;
    document.getElementById("vision{{$category->id}}").style.backgroundColor = "orange";
    //document.getElementByClassName("element{{$category->id}}")[0].style.display = "inline";
  } else {
    document.getElementById("catformdiv{{$category->id}}").style.display = "none";
    document.getElementById("vision{{$category->id}}").innerHTML = "Add Item";
    //document.getElementById("other{{$category->id}}").checked = false;
    document.getElementById("vision{{$category->id}}").style.backgroundColor = "green";
   // document.getElementsByClassName("element{{$category->id}}")[0].style.display = "none";

  }
});


            </script>

            </div>
</div>
            </div>
            @endforeach
</div>
            </div>    
    </div>
    </body>
</html>
