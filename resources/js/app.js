import './bootstrap';


window.Echo.channel('chat')
    .listen('.message.sent', (e) => {
        console.log(e);

    });

document.addEventListener('DOMContentLoaded', () => {
    // Kiểm tra khi Echo khởi tạo xong
    const echoInterval = setInterval(() => {
        if (window.Echo && window.Echo.connector && window.Echo.connector.socket) {

            

        }
    }, 500);


    // // Kiểm tra khi Echo khởi tạo xong
    // const echoInterval = setInterval(() => {

    //     const socket = io('http://127.0.0.1:6001', {
    //         transports: ['websocket'],
    //     });
    //     socket.on('connect', () => console.log('✅ Kết nối socket.io trực tiếp thành công'));
    //     socket.on('connect_error', (err) => console.error('❌ Socket connect error:', err));
    // }, 500);
});









// vị trí của trình duyệt
// document.addEventListener("DOMContentLoaded", function () {
//     if (navigator.geolocation) {
//         navigator.geolocation.getCurrentPosition(sendPositionToServer, showError);
//     } else {
//         console.log("Trình duyệt này không hỗ trợ Geolocation.");
//     }
// });

// function sendPositionToServer(position) {
//     const latitude = position.coords.latitude;
//     const longitude = position.coords.longitude;


//     // Sử dụng fetch để gửi tọa độ về Laravel server
//     fetch('/save-location', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Lấy CSRF token
//         },
//         body: JSON.stringify({
//             latitude: latitude,
//             longitude: longitude
//         })
//     })
//         .then(response => response.json())
//         .then(data => {
//             console.log('Thành công:', data);
//         })
//         .catch((error) => {
//             console.error('Lỗi:', error);
//         });
// }

// function showError(error) {
//     switch (error.code) {
//         case error.PERMISSION_DENIED:
//             console.log("Người dùng từ chối yêu cầu chia sẻ vị trí.")
//             break;
//         // Xử lý các lỗi khác...
//     }
// }
