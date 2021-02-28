    <script>
      // 获取左右按钮和图片列表
      let oLeft = document.querySelector(".left");
      let oRight = document.querySelector(".right");
      let oImgList = document.querySelector(".img-list");
 
      //克隆了第一张图片
      let cloneImg = oImgList.firstElementChild.cloneNode();
      //把第一张图片放入图片列表中
      oImgList.appendChild(cloneImg);
 
      //index表示当前显示到第几张
      let index = 0;
 
      //  设置函数节流锁
      let lock = true;
      //右按钮的点击事件
      function handleRightBtn() {
        //  判断锁的状态  是关闭直接结束函数
        if (!lock) return;
 
        index++;
        // 为什么加过渡 因为最后一张图片会将过渡去掉
        oImgList.style.transition = "0.5s ease";
        if (index === 5) {
          setTimeout(function () {
            oImgList.style.left = 0;
            index = 0;
            // 取消过渡  500毫秒之后瞬间移动到第一张
            oImgList.style.transition = "none";
          }, 500);
        }
 
        oImgList.style.left = -index * 800 + "px";
 
        // 关锁
        lock = false;
 
        // 500毫秒之后打开
        setTimeout(function () {
          lock = true;
        }, 500);
 
        setCircles();
      }
 
      oRight.onclick = handleRightBtn;
 
      //左按钮的点击事件
      oLeft.onclick = function () {
        //  判断锁的状态  是关闭直接结束函数
        if (!lock) return;
 
        if (index === 0) {
          oImgList.style.transition = "none";
          oImgList.style.left = -5 * 800 + "px";
 
          // 真正的最后一张图片
          index = 4;
          // 设置延时器的目的是 可以让我们过渡瞬间取消然后加上
          setTimeout(function () {
            // 加过渡
            oImgList.style.transition = "0.5s ease";
 
            oImgList.style.left = -4 * 800 + "px";
          }, 0);
        } else {
          index--;
          oImgList.style.left = -index * 800 + "px";
        }
 
        // 关锁
        lock = false;
        // 500毫秒之后打开
        setTimeout(function () {
          lock = true;
        }, 500);
 
        //设置小圆点
        setCircles();
      };
 
      //点击轮播 事件委托
      let oCircle = document.querySelector(".circle-list");
 
      oCircle.onclick = function (e) {
        if (e.target.nodeName.toLowerCase() === "li") {
          const n = e.target.getAttribute("data-n");
 
          const theCircle = document.querySelector(`li[data-n="${n}"]`);
 
          index = n;
 
          //设置小圆点
          setCircles();
 
          oImgList.style.transition = "0.5s ease";
          oImgList.style.left = -index * 800 + "px";
        }
      };
 
      const Circles = document.querySelectorAll(".circle");
 
      //小圆点设置函数
      function setCircles() {
        for (let i = 0; i < Circles.length; i++) {
          if (i === index % 5) {
            Circles[i].classList.add("active");
          } else {
            Circles[i].classList.remove("active");
          }
        }
      }
 
      //自动轮播
      let autoplay = setInterval(() => {
        handleRightBtn();
      }, 2000);
 
      //移动上去停止轮播
      const banner = document.getElementById("wrap");
 
      banner.onmouseenter = function () {
        clearInterval(autoplay);
      };
 
      banner.onmouseleave = function () {
        //设表先关
        clearInterval(autoplay);
 
        autoplay = setInterval(() => {
          handleRightBtn();
        }, 2000);
      };
    </script>