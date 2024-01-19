let startTime, endTime;

function getStartTime() {
  startTime = new Date();
  console.log("Thời gian bắt đầu:", startTime);
}

function getEndTime() {
  if (startTime) {
    endTime = new Date();
    console.log("Thời gian kết thúc:", endTime);

    // Tính thời gian thực hiện
    let timeDiff = endTime - startTime;
    let seconds = Math.floor(timeDiff / 1000);
    console.log("Thời gian thực hiện (giây):", seconds);
  } else {
    console.log('Nhấn "Bắt Đầu" trước khi nhấn "Kết Thúc".');
  }
}

function getStartTime() {
  startTime = new Date();
  console.log("Thời gian bắt đầu:", startTime);
}

function getEndTime() {
  if (startTime) {
    endTime = new Date();
    console.log("Thời gian kết thúc:", endTime);

    // Tính thời gian thực hiện
    let timeDiff = endTime - startTime;
    let seconds = Math.floor(timeDiff / 1000);
    console.log("Thời gian thực hiện (giây):", seconds);
  } else {
    console.log('Nhấn "Bắt Đầu" trước khi nhấn "Kết Thúc".');
  }
}
