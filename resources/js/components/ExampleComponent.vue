
<template>
    <div>
        <video v-if="!photos.photo" ref="video" class="camera-stream" />
        <!-- <img v-else :src="imageData.image" v-bind:style="{transform: 'rotate(' + imageData.image_orientation + 'deg'}" class="camera-stream"> -->
        <div class="icon-group">   
            <div  class="camera-icon" @click="captureImage()" >
                <span><i class="fa-solid fa-camera"></i></span>
                <button class="btn btn-primary">Take Picture</button>
            </div>
            
            <div  class='camera-icon'>
                <i class="fa-solid fa-check"></i>
                <button class="btn btn-success" >Done</button>
            </div>
            <div class="camera-icon" >
               <i class="fa-solid fa-trash-can"></i>
                <button class="btn btn-danger" >Cancel</button>
            </div>
        </div>
        
        <div class="snap-container">
            <img v-for="photo in photos" :key="photo.id" :src="photo" class="snap-photo" >

        </div>
        
    </div>



</template>

<script>
    import axios from 'axios';
export default {
    
    data() {
        return {
            photos: [],
            mediaStream: null,
            imageData: {
                image: '',
                image_orientation: 0,
            },
        }
    },
    methods: {
        captureImage() {
            const mediaStreamTrack = this.mediaStream.getVideoTracks()[0]
            const imageCapture = new window.ImageCapture(mediaStreamTrack)
            let reader = new FileReader();
            return imageCapture.takePhoto().then(blob => {
                reader.readAsDataURL(blob)
                reader.onload = () => {
                    this.imageData.image = reader.result;
                    this.photos.push(this.imageData.image)
                    console.log(this.photos);
                }                
            })  
        },
        
        
    },
    mounted() {
        navigator.mediaDevices.getUserMedia({video: true})
            .then(mediaStream => {
                    this.$refs.video.srcObject = mediaStream;
                    this.$refs.video.play()
                    this.mediaStream = mediaStream                   
            })   
    },
}
</script>

<style>
    .icon-group {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        margin: 12px auto;
    }
    .camera-icon {
        width: 15%;
        vertical-align: middle;
        margin: auto;
    }
    .camera-stream {
        border: 5px solid black;
        margin: 120px 170px;
        width: 50%;
    }
    .snap-container{
        display: flex;
        justify-content:center;
        flex: wrap;

    }
    .snap-photo {
        width: 150px;
        border: 5px solid black;
        margin: 10px;
       
    
    }
     
</style>

