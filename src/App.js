import React, { Component, Suspense } from 'react'
import Navbar from "./components/navbar/Navbar";
import GlobalStyle from './styles/Global';
import './i18n'
import AbzCarousel from './components/carousel/Carousel';
import HomeSection from './components/home/HomeSection';
import ServicesSection from './components/abzservices/ServicesSection';
import ProjectsSection from './components/Projects/Projects';
import OurWorkSection from './components/ourwork/OurWork';
import AboutUsSection from './components/aboutus/AboutUs';
import ContactUsSection from './components/contactus/ContactUs';
import MessageFormSection from './components/sendMessage/MessageForm';

class App extends Component {
  state = {
    navbarOpen: false
  }

  handleNavbar = () => {
    this.setState({ navbarOpen: !this.state.navbarOpen });
  }

  render() {

    return (

      <Suspense fallback={null}>
        <GlobalStyle />

        <Navbar
          navbarState={this.state.navbarOpen}
          handleNavbar={this.handleNavbar}
        />
        <AbzCarousel />
        <HomeSection />
        <ServicesSection />
        <ProjectsSection />
        <OurWorkSection />
        <AboutUsSection />
        <MessageFormSection/>
        <ContactUsSection/>
      </Suspense>

    )
  }
}

export default App