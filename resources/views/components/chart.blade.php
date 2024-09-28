<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

  <div class="bg-white h-[333px] w-[385px] rounded-[40px]" id="chart">
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

  <script>
    new Morris.Donut({
      element: 'chart',

      data: [
        {label: 'Female', value: 20},
        {label: 'Male', value: 50},
      ],

      colors: ['#07BD19', '#1151F5'] 
    });
  </script>
</html>

