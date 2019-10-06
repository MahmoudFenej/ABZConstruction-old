import React, { Component, Suspense } from 'react'
import Navbar from "./components/navbar/Navbar";
import GlobalStyle from './styles/Global';
import './i18n'
import AbzCarousel from './components/carousel/Carousel';

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

      </Suspense>

    )
  }
}

export default App