css gradient : https://css-tricks.com/css3-gradients/
Gradients are typically one color that fades into another, but in CSS you can control every aspect of how that happens, from the direction to the colors (as many as you want) to where those color changes happen.
Gradients are background-image
While declaring the a solid color uses background-color property in CSS, gradients use background-image.
Perhaps the most common and useful type of gradient is the linear-gradient(). The gradients “axis” can go from left-to-right, top-to-bottom, or at any angle you chose. Not declaring an angle will assume top-to-bottom:
To make it left-to-right, you pass an additional parameter at the beginning of the linear-gradient() function starting with the word “to”, indicating the direction, like “to right”:
This “to” syntax works for corners as well. For instance if you wanted the axis of the gradient to start at the bottom left corner and go to the top right corner, you could say “to top right”:
If you wanted to make sure it was 45°, you could declare that:
.gradient {
  background-image:
    linear-gradient(
      45deg, 
      red, #f06d06
    );
}
You aren’t limited to just two colors either. In fact you can have as many comma-separated colors as you want. 
You can also declare where you want any particular color to “start”. Those are called “color-stops”. Say you wanted yellow to take up the majority of the space, but red only a little bit in the beginning, you could make the yellow color-stop pretty early:

.gradient {
  height: 100px;
  background-color: red;
  background-image:
    linear-gradient(
      to right,
      red,
      yellow 10%
    );
}
We tend to think of gradients as fading colors, but if you have two color stops that are the same, you can make a solid color instantly change to another solid color. This can be useful for declaring a full-height background that simulates columns.

.columns-bg {
  background-image:
    linear-gradient(
      to right, 
      #fffdc2,
      #fffdc2 15%,
      #d7f0a2 15%,
      #d7f0a2 85%,
      #fffdc2 85%
    );
}