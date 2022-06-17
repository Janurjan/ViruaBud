let faceapi;
let detections = [];

let video;
let canvas;

function setup(){
    canvas = createCanvas(480, 360);
    canvas.id('canvas');
    video= createCapture(VIDEO);
    video.id('video');
    video.size(width, height);

    const faceOptions = {
        withLandmarks: true,
        withExpressions:true,
        withDescriptors: false,
        minConfidence:0.5
    };

    faceapi = ml5.faceApi(video, faceOptions, faceReady)
}
function faceReady(){
    faceapi.detect(gotFaces);
}

function gotFaces(error, result){
    if(error){
        console.log(error);
        return;
    }

    detections = result;
    console.log(detections);

    clear();//Draw transparent background
    drawBoxs(detections);//Draw detection box
    drawLandmarks(detections);
    drawExpressions(detections, 20, 250, 14);

    faceapi.detect(gotFaces);

}
function draw(){
   
}

function drawBoxs(detections){
    if(detections.length > 0){
        for (let f = 0; f < detections; f++) {
            let x = detections[0].alignedRect._box._x;
            let y = detections[0].alignedRect._box._y;
            let rectWidth =  detections[0].alignedRect._box._width;
            let rectHeight =  detections[0].alignedRect._box._height;

            //let{_x, _y, _width, _height} =  detections[0].alignedRect._box;

            stroke(44, 169, 225);
            strokeWeight(1);
            noFill();
            rect(_x, _y, rectWidth, rectHeight);
        }
    }
}
//// Draw all the face points
function drawLandmarks(detections){
    if (detections.length > 0) {//If at least 1 face is detected: もし1つ以上の顔が検知されていたら
      for (f=0; f < detections.length; f++){
        let points = detections[f].landmarks.positions;
        for (let i = 0; i < points.length; i++) {
          stroke(44, 169, 225);
          strokeWeight(3);
          point(points[i]._x, points[i]._y);
        }
      }
    }
  }

  function drawExpressions(detections, x, y, textYSpace){
    if(detections.length > 0){//If at least 1 face is detected: もし1つ以上の顔が検知されていたら
      let {neutral, happy, angry, sad, disgusted, surprised, fearful} = detections[0].expressions;
      textFont('Helvetica Neue');
      textSize(16);
      noStroke();
      fill(44, 169, 225);
  
      text("neutral:       " + nf(neutral*100, 2, 2)+"%", x, y);
      text("happiness: " + nf(happy*100, 2, 2)+"%", x, y+textYSpace);
      text("anger:        " + nf(angry*100, 2, 2)+"%", x, y+textYSpace*2);
      text("sad:            "+ nf(sad*100, 2, 2)+"%", x, y+textYSpace*3);
      text("disgusted: " + nf(disgusted*100, 2, 2)+"%", x, y+textYSpace*4);
      text("surprised:  " + nf(surprised*100, 2, 2)+"%", x, y+textYSpace*5);
      text("fear:           " + nf(fearful*100, 2, 2)+"%", x, y+textYSpace*6);
    }else{//If no faces is detected: 顔が1つも検知されていなかったら
      text("neutral: ", x, y);
      text("happiness: ", x, y + textYSpace);
      text("anger: ", x, y + textYSpace*2);
      text("sad: ", x, y + textYSpace*3);
      text("disgusted: ", x, y + textYSpace*4);
      text("surprised: ", x, y + textYSpace*5);
      text("fear: ", x, y + textYSpace*6);
    }
  }
  /*drawExpressions(detections, 20, 250, 14);//Draw face expression

  faceapi.detect(gotFaces);*/


