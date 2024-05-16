<div class="container">
  <div class="slide">
    <div class="item" style="background-image: url(https://i.ibb.co/qCkd9jS/img1.jpg);">
      <div class="content">
        <div class="name">Switzerland</div>
        <div class="des">Lorem ipsum dolor, sit amet!</div>
        <button>See More</button>
      </div>
    </div>
    <div class="item" style="background-image: url(https://i.ibb.co/jrRb11q/img2.jpg);">
      <div class="content">
        <div class="name">Finland</div>
        <div class="des">Lorem ipsum dolor, sit amet!</div>
        <button>See More</button>
      </div>
    </div>
    <div class="item" style="background-image: url(https://i.ibb.co/NSwVv8D/img3.jpg);">
      <div class="content">
        <div class="name">Iceland</div>
        <div class="des">Lorem ipsum dolor, sit amet!</div>
        <button>See More</button>
      </div>
    </div>
    <div class="item" style="background-image: url(https://i.ibb.co/Bq4Q0M8/img4.jpg);">
      <div class="content">
        <div class="name">Australia</div>
        <div class="des">Lorem ipsum dolor, sit amet!</div>
        <button>See More</button>
      </div>
    </div>
    <div class="item" style="background-image: url(https://i.ibb.co/jTQfmTq/img5.jpg);">
      <div class="content">
        <div class="name">Netherland</div>
        <div class="des">Lorem ipsum dolor, sit amet!</div>
        <button>See More</button>
      </div>
    </div>
    <div class="item" style="background-image: url(https://i.ibb.co/RNkk6L0/img6.jpg);">
      <div class="content">
        <div class="name">Ireland</div>
        <div class="des">Lorem ipsum dolor, sit amet!</div>
        <button>See More</button>
      </div>
    </div>
  </div>

  <div class="button">
    <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
    <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
  </div>
</div>


<style>
    @import url('https://use.fontawesome.com/releases/v6.4.2/css/all.css');

body {
  height: 100vh;
  background: #eaeaea;
  overflow: hidden;
  display: grid;
  place-items: center;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.container {
  position: relative;
  width: 800px;
  height: 480px;
  background: #f5f5f5;
  box-shadow: 0 30px 50px #dbdbdb;
}

.container .slide .item {
  width: 165px;
  height: 250px;
  position: absolute;
  top: 50%;
  transform: translate(0, -50%);
  border-radius: 20px;
  box-shadow: 0 30px 50px #505050;
  background-position: 50% 50%;
  background-size: cover;
  display: inline-block;
  transition: 0.5s;
}

.slide .item:nth-child(1),
.slide .item:nth-child(2) {
  top: 0;
  left: 0;
  transform: translate(0, 0);
  border-radius: 0;
  width: 100%;
  height: 100%;
}


.slide .item:nth-child(3) {
  left: 50%;
}

.slide .item:nth-child(4) {
  left: calc(50% + 210px);
}

.slide .item:nth-child(5) {
  left: calc(50% + 430px);
}

.slide .item:nth-child(n + 6) {
  left: calc(50% + 650px);
  opacity: 0;
}

.item .content {
  position: absolute;
  top: 50%;
  left: 100px;
  width: 300px;
  text-align: left;
  color: #eee;
  transform: translate(0, -50%);
  font-family: system-ui;
  display: none;
}


.slide .item:nth-child(2) .content {
  display: block;
}

.content .name {
  font-size: 40px;
  text-transform: uppercase;
  font-weight: bold;
  opacity: 0;
  animation: animate 1s ease-in-out 1 forwards;
}

.content .des {
  margin-top: 10px;
  margin-bottom: 20px;
  opacity: 0;
  animation: animate 1s ease-in-out 0.3s 1 forwards;
}

.content button {
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  opacity: 0;
  animation: animate 1s ease-in-out 0.6s 1 forwards;
}


@keyframes animate {
  from {
    opacity: 0;
    transform: translate(0, 100px);
    filter: blur(33px);
  }

  to {
    opacity: 1;
    transform: translate(0);
    filter: blur(0);
  }
}

.button {
  width: 100%;
  text-align: center;
  position: absolute;
  bottom: 20px;
}

.button button {
  width: 40px;
  height: 35px;
  border-radius: 8px;
  border: none;
  cursor: pointer;
  margin: 0 5px;
  border: 1px solid #000;
  transition: 0.3s;
}

.button button:hover {
  background: #ababab;
  color: #fff;
}
</style>

<script>
    const $next = document.querySelector('.next');
const $prev = document.querySelector('.prev');

$next.addEventListener(
  'click',
  () => {
    const items = document.querySelectorAll('.item');
    document.querySelector('.slide').appendChild(items[0]);
  },
);

$prev.addEventListener(
  'click',
  () => {
    const items = document.querySelectorAll('.item');
    document.querySelector('.slide').prepend(items[items.length - 1]);
  },
);
</script>