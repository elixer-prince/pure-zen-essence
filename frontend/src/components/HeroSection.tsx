import { FaWhatsapp, FaArrowDown } from "react-icons/fa6";
import PlaceholderImage from "../assets/landscape-placeholder.svg";

const HeroSection = () => {
  return (
    // HERO SECTION
    <header className="mt-28 flex h-fit w-256 max-w-screen items-center gap-16 p-4 pb-30 sm:pt-16 md:py-30">
      {/* Left Container */}
      <section className="flex flex-col items-center gap-16 pt-[1px]">
        {/* Text Container */}
        <div className="flex flex-col gap-8 text-center">
          <h1 className="text-5xl font-black md:text-6xl">
            Have you ever wanted to look{" "}
            <span className="from-brand-green to-brand-blue bg-linear-to-r bg-clip-text text-transparent transition-colors duration-500">
              NATURALLY
            </span>{" "}
            Beautiful?
          </h1>
          <p className="text-3xl font-semibold">
            Look no further,{" "}
            <span className="from-brand-green to-brand-blue bg-linear-to-r bg-clip-text text-4xl font-black text-transparent">
              Pure Zen Essence
            </span>{" "}
            is all you need!
          </p>
        </div>
        <div className="flex gap-4 font-bold text-white">
          <a
            className="to-brand-darkblue flex items-center gap-1 rounded-xl bg-linear-to-r from-black p-4 text-lg"
            href="#about"
          >
            Learn More <FaArrowDown className="hidden text-xl sm:block" />
          </a>
          <a
            className="to-brand-blue from-brand-green flex items-center gap-1 rounded-xl bg-linear-to-r p-4 text-lg"
            href="#contact"
          >
            Contact Us <FaWhatsapp className="hidden text-2xl sm:block" />
          </a>
        </div>
      </section>
      {/* Right Container */}
      <div className="col-span-2 hidden h-full items-center justify-center lg:flex">
        <img
          src={PlaceholderImage}
          alt="Image of a beautiful woman should go here..."
        />{" "}
      </div>
    </header>
  );
};

export default HeroSection;
