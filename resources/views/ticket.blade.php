<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Ticket Dofun</title>
  <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/1.1.0.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<style>
    body {
  background-image: linear-gradient(-45deg, #8067B7, #EC87C0);
  min-height: calc(100vh - 40px);
  margin: 20px;
  font-family: "Lato", sans-serif;
}
body widget {
  filter: drop-shadow(1px 1px 3px rgba(0, 0, 0, 0.3));
}
body widget[type=ticket] {
  width: 255px;
}
body widget[type=ticket] .top > div,
body widget[type=ticket] .bottom > div {
  padding: 0 18px;
}
body widget[type=ticket] .top > div:first-child,
body widget[type=ticket] .bottom > div:first-child {
  padding-top: 18px;
}
body widget[type=ticket] .top > div:last-child,
body widget[type=ticket] .bottom > div:last-child {
  padding-bottom: 18px;
}
body widget[type=ticket] .top img,
body widget[type=ticket] .bottom img {
  padding: 18px 0;
}
body widget[type=ticket] .top,
body widget[type=ticket] .bottom,
body widget[type=ticket] .rip {
  background-color: #fff;
}
body widget[type=ticket] .top {
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
}
body widget[type=ticket] .top .deetz {
  padding-bottom: 10px !important;
}
body widget[type=ticket] .bottom {
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  padding: 18px;
  height: 30px;
  padding-top: 10px;
}
body widget[type=ticket] .bottom .barcode {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF4AAAABCAYAAABXChlMAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAYdEVYdFNvZnR3YXJlAHBhaW50Lm5ldCA0LjAuOWwzfk4AAACPSURBVChTXVAJDsMgDOsrVpELiqb+/4c0DgStQ7JMYogNh2gdvg5VfXFCRIZaC6BOtnoNFpvaumNmwb/71Frrm8XvgYkker1/g9WzMOsohaOGNziRs5inDsAn8yEPengTapJ5bmdZ2Yv7VvfPN6AH2NJx7nOWPTf1/78hoqgxhzw3ZqYG1Dr/9ur3y8vMxgNZhcAUnR4xKgAAAABJRU5ErkJggg==);
  background-repeat: repeat-y;
  min-width: 58px;
}
body widget[type=ticket] .bottom .buy {
  display: block;
  font-size: 12px;
  font-weight: bold;
  background-color: #5D9CEC;
  padding: 0 18px;
  line-height: 30px;
  border-radius: 15px;
  color: #fff;
  text-decoration: none;
}
body widget[type=ticket] .rip {
  height: 20px;
  margin: 0 10px;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAACCAYAAAB7Xa1eAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAYdEVYdFNvZnR3YXJlAHBhaW50Lm5ldCA0LjAuOWwzfk4AAAAaSURBVBhXY5g7f97/2XPn/AcCBmSMQ+I/AwB2eyNBlrqzUQAAAABJRU5ErkJggg==);
  background-size: 4px 2px;
  background-repeat: repeat-x;
  background-position: center;
  position: relative;
  box-shadow: 0 1px 0 0 #fff, 0 -1px 0 0 #fff;
}
body widget[type=ticket] .rip:before, body widget[type=ticket] .rip:after {
  content: "";
  position: absolute;
  width: 20px;
  height: 20px;
  top: 50%;
  transform: translate(-50%, -50%) rotate(45deg);
  border: 5px solid transparent;
  border-top-color: #fff;
  border-right-color: #fff;
  border-radius: 100%;
  pointer-events: none;
}
body widget[type=ticket] .rip:before {
  left: -10px;
}
body widget[type=ticket] .rip:after {
  transform: translate(-50%, -50%) rotate(225deg);
  right: -40px;
}
body widget .-bold {
  font-weight: bold;
}
</style>

</head>
<body>
<!-- partial:index.partial.html -->

<widget type="ticket" class="--flex-column"> 
   <div class="top --flex-column">
      <div class="bandname -bold">{{ $data->nama }}</div>
      <div class="tourname">{{ Auth::user()->name }}</div>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/concert.png" alt="" />
      <div class="deetz --flex-row-j!sb">
         <div class="event --flex-column">
            <div class="date">{{  Carbon\Carbon::parse($data->date)->format('d F Y')}}</div>
            <div class="location -bold">Rita Park</div>
         </div>
         <div class="price --flex-column">
            <div class="label">Price</div>
            <div class="cost -bold">{{ $data->total_harga}}</div>
         </div> 
      </div> 
   </div>
   <div class="rip"></div>
   <div class="bottom --flex-row-j!sb">
      <div class="barcode"></div>
      <span class="buy" href="#">For {{ $data->qty }} People</span>
   </div>
</widget>
</body>
</html>
