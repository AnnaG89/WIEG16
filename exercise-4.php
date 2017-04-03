<?php
/**
 * Räkna ut hur många instanser av varje ord som finns i strängen.
 * Sortera datan så orden hamnar i ordning med ordet med flest instanser först.
 * http://php.net/manual/en/ref.array.php
 */
$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor sapien at turpis tempor, id imperdiet neque tincidunt. Etiam efficitur urna in risus porttitor, vitae tincidunt risus mollis. Donec pharetra sem mauris, at vehicula dui ultricies ac. Etiam sollicitudin malesuada augue, a dapibus nisl ornare at. Maecenas quis tincidunt tellus, eget malesuada est. Aenean sodales malesuada erat in cursus. Sed sed porta diam. Quisque egestas enim at quam dignissim fringilla. Cras consectetur mi sapien, in pretium turpis iaculis quis. Aenean quis cursus est, id malesuada enim. Duis nec risus orci. Nam non nunc interdum, suscipit nibh eu, hendrerit purus. Curabitur risus mauris, blandit sollicitudin porta sit amet, fringilla ac nibh. Suspendisse mi ante, placerat ut felis venenatis, egestas posuere lorem. Fusce dapibus sollicitudin semper. Quisque elementum, lectus ac interdum finibus, nunc dolor facilisis dolor, non iaculis magna ante vel felis. Aliquam rhoncus lectus at tempor condimentum. Etiam semper ante orci, nec dapibus justo vehicula eu. Nunc lobortis mauris eu lorem volutpat, eu mattis velit viverra. Aliquam lacinia, velit sit amet ultricies mattis, mi tortor commodo ligula, nec faucibus elit odio a turpis. Donec pulvinar, orci non elementum auctor, nisi ligula maximus arcu, eget tempor enim metus sit amet leo. Nulla ornare felis sit amet lacus posuere pharetra. Maecenas pellentesque sed sem eu gravida. Nunc consequat ultricies porttitor. Pellentesque dignissim felis vel tristique aliquet. Aenean imperdiet urna risus. Aenean vel velit et nibh fringilla rhoncus. Aliquam lacinia euismod neque, nec volutpat tellus pulvinar ac. Aliquam id commodo ex. Aenean facilisis, ligula et pretium ornare, ex nibh condimentum ligula, ac venenatis leo risus vel velit. Maecenas viverra ante non velit tristique, blandit commodo nunc laoreet. Sed euismod arcu purus, ut rutrum lectus commodo vitae. Donec vel lorem odio. Donec urna enim, pharetra sit amet blandit at, fermentum ac purus. Aenean nec convallis urna. Mauris tempor lobortis interdum. Nulla pharetra, augue id bibendum faucibus, quam dolor scelerisque enim, eu tempor urna dolor nec nibh. Sed posuere neque vitae ultrices vehicula. Ut dignissim orci sed arcu ultrices, sed pharetra risus condimentum. Nullam malesuada, diam a tincidunt fermentum, mauris purus sodales nunc, ut blandit lorem mauris sed velit. Sed metus elit, maximus in turpis vel, volutpat pharetra turpis. Suspendisse condimentum vulputate purus nec dapibus. Aliquam erat volutpat. Donec nec dui id velit faucibus laoreet. Fusce gravida eros purus, non pharetra eros placerat sit amet. Quisque vel tellus erat. Mauris semper, dui eget aliquet venenatis, neque justo facilisis massa, eleifend lacinia est felis ut risus. Curabitur malesuada ex sollicitudin aliquam cursus. Suspendisse tempor efficitur justo. Mauris at ex eu urna porttitor tincidunt. Nullam vitae commodo sapien, luctus lacinia lacus. Nulla volutpat tincidunt aliquam. Sed eu sem ante. Proin volutpat convallis sapien, in venenatis massa imperdiet sed. Pellentesque ut leo ut ex aliquam aliquet.";


$array = explode(" ", $string);
 
$times_repeated = array_count_values($array);
  
arsort($times_repeated);
  
echo '<pre>';
 
print_r($times_repeated);
 
'<pre>';