import { FaWhatsapp, FaArrowDown } from "react-icons/fa6";

const HeroSection = () => {
  return (
    <header className="mt-24 grid h-[calc(100dvh-6rem)] grid-cols-1 items-center gap-8 border-2 bg-[url('./src/assets/')] bg-cover bg-fixed bg-center bg-no-repeat p-8 md:grid-cols-4">
      {/* Left Container */}
      <section className="col-span-2 flex flex-col items-center gap-16">
        <div className="flex flex-col items-center gap-8 text-center">
          <h1 className="text-5xl font-black">
            Have you ever wanted to look{" "}
            <span className="from-brand-green to-brand-blue bg-linear-to-r bg-clip-text text-transparent transition-colors duration-500">
              Naturally
            </span>{" "}
            Beautiful?
          </h1>
          <p className="text-3xl font-semibold">
            Look no further,{" "}
            <span className="from-brand-green to-brand-blue bg-linear-to-r bg-clip-text text-transparent">
              Pure Zen Essence
            </span>{" "}
            is here to help you!
          </p>
        </div>
        <div className="flex gap-4 font-bold text-white">
          <a
            className="to-brand-darkblue flex items-center gap-1 rounded-lg bg-linear-to-r from-black p-4"
            href="#about"
          >
            Learn More <FaArrowDown className="hidden text-xl sm:block" />
          </a>
          <a
            className="to-brand-blue from-brand-green flex items-center gap-1 rounded-lg bg-linear-to-r p-4"
            href="#contact"
          >
            Contact Us <FaWhatsapp className="hidden text-2xl sm:block" />
          </a>
        </div>
      </section>
      {/* Right Container */}
      <div className="col-span-2 flex h-full items-center justify-center border-2 border-amber-500">
        <img src="" alt="Image of a beautiful woman should go here..." />
      </div>
    </header>
  );
};

export default HeroSection;
