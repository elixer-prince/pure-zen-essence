import { FaWhatsapp, FaArrowDown } from "react-icons/fa6";

const HeroSection = () => {
  return (
    // HERO SECTION
    <header className="h-(calc(100dvh-96px) mt-24 grid px-4 py-16 md:pb-28 lg:grid-cols-12">
      {/* Left Container */}
      <section className="col-span-7 mb-8 flex flex-col items-center justify-center gap-8 p-4 px-2 pb-8 text-center sm:pb-8 md:px-8 md:pb-4 lg:col-span-8 lg:px-4 lg:pb-0">
        {/* Text Container */}
        <div className="flex flex-col items-center gap-8">
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
        <div className="flex items-center gap-4 font-bold text-white">
          <a
            className="to-brand-darkblue flex items-center gap-1 rounded-xl bg-linear-to-r from-black p-4 text-lg md:py-4"
            href="#about"
          >
            Learn More <FaArrowDown className="hidden text-xl sm:block" />
          </a>
          <a
            className="to-brand-blue from-brand-green flex items-center gap-1 rounded-xl bg-linear-to-r p-4 text-lg md:py-4"
            href="#contact"
          >
            Contact Us <FaWhatsapp className="hidden text-2xl sm:block" />
          </a>
        </div>
      </section>
      {/* Right Container */}
      <div className="col-span-2 ml-32 hidden items-center justify-center border-8 border-amber-500">
        <img
          className="hidden rounded-xl"
          src="https://images.pexels.com/photos/20889986/pexels-photo-20889986/free-photo-of-kiss.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          alt="Image of a beautiful woman should go here..."
        />
      </div>
    </header>
  );
};

export default HeroSection;
