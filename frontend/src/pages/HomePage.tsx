import Navbar from "../components/Navbar";
import HeroSection from "../components/HeroSection";
import AboutSection from "../components/AboutSection";
import ProductSection from "../components/ProductSection";
import TestimonialSection from "../components/TestimonialSection";
import FaqSection from "../components/FaqSection";
import ContactSection from "../components/ContactSection";
import Footer from "../components/Footer";

const HomePage = () => {
  return (
    <>
      <Navbar />
      <HeroSection />
      <AboutSection />
      <ProductSection />
      <TestimonialSection />
      <FaqSection />
      <ContactSection />
      <Footer />
    </>
  );
};

export default HomePage;
