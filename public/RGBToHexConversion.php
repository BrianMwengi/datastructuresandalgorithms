The rgb function is incomplete. Complete it so that passing in RGB decimal values will result in a hexadecimal representation being returned. Valid decimal values for RGB are 0 - 255. Any values that fall out of that range must be rounded to the closest valid value.

Note: Your answer should always be 6 characters long, the shorthand with 3 will not work here.

Examples (input --> output):
255, 255, 255 --> "FFFFFF"
255, 255, 300 --> "FFFFFF"
0, 0, 0       --> "000000"
148, 0, 211   --> "9400D3"

Algorithms

my answer (where I am going wrong)

function rgb($r,$g,$b){
   $hex_color = sprintf("#%02x%02x%02x", $r, $g, $b);
  hexdec($hex_color); 
  echo $hex_color . '<br/>';
  var_dump("Debugging:", ['r'=>$r, 'g'=>$g, 'b'=>$b]);
  return "FFFFFF";
}