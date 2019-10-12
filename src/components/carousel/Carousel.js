import React from 'react';
import { Carousel } from 'react-responsive-carousel';
import "react-responsive-carousel/lib/styles/carousel.min.css";
import { Container } from '@material-ui/core';

export default class AbzCarousel extends React.Component {
    render() {
        return (
            <Container>
            <Carousel autoPlay={true} showThumbs={false} infiniteLoop={true}>
                <div><img src="assets/images/CarouselImages/image1.jpg" alt="Icon" /></div>
                <div><img src="assets/images/CarouselImages/image2.jpg" alt="Icon" /></div>
                <div><img src="assets/images/CarouselImages/image3.jpg" alt="Icon" /></div>
                <div><img src="assets/images/CarouselImages/image4.jpg" alt="Icon" /></div>
                <div><img src="assets/images/CarouselImages/image5.jpg" alt="Icon" /></div>
                <div><img src="assets/images/CarouselImages/image6.jpg" alt="Icon" /></div>
                <div><img src="assets/images/CarouselImages/image7.jpg" alt="Icon" /></div>
                <div><img src="assets/images/CarouselImages/image8.jpg" alt="Icon" /></div>
                <div><img src="assets/images/CarouselImages/image10.jpg" alt="Icon" /></div>
            </Carousel>
            </Container>
        );
    }
}