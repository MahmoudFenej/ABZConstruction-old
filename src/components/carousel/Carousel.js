import React from 'react';
import { Carousel } from 'react-responsive-carousel';
import "react-responsive-carousel/lib/styles/carousel.min.css";

export default class AbzCarousel extends React.Component {
    render() {
        return (
            <Carousel autoPlay={true} showThumbs={false} infiniteLoop = {true}>
                <div><img src="assets/images/CarouselImages/image1.jpg" /></div>
                <div><img src="assets/images/CarouselImages/image2.jpg" /></div>
                <div><img src="assets/images/CarouselImages/image3.jpg" /></div>
                <div><img src="assets/images/CarouselImages/image4.jpg" /></div>
                <div><img src="assets/images/CarouselImages/image5.jpg" /></div>
                <div><img src="assets/images/CarouselImages/image6.jpg" /></div>
                <div><img src="assets/images/CarouselImages/image7.jpg" /></div>
                <div><img src="assets/images/CarouselImages/image8.jpg" /></div>
                <div><img src="assets/images/CarouselImages/image10.jpg" /></div>
            </Carousel>
        );
    }
}