

let canvas = document.querySelector('#canvas');
let context = canvas.getContext('2d');
let video = document.querySelector('#video');

// wordt gekeken naar de user media in deze geval CAMERA
// daarna wordt een video afgespeeld en wordt de camera gebruikt

if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia){
    navigator.mediaDevices.getUserMedia({video: true}).then(stream =>{
        video.srcObject = stream;
        video.play();
    })
}