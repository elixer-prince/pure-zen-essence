import { useRef } from "react";
// ICONS
import { FaBars } from "react-icons/fa6";
import { IoClose } from "react-icons/io5";
// ASSETS
import BrandIcon from "../assets/landscape-placeholder.svg";

const Navbar = () => {
  const sections: { id: string; name: string }[] = [
    { id: "#", name: "HOME" },
    { id: "#about", name: "ABOUT US" },
    { id: "#products", name: "OUR PRODUCTS" },
    { id: "#testimonials", name: "TESTIMONIALS" },
    { id: "#faqs", name: "FAQS" },
  ];

  // REFERENCES
  const navbarRef = useRef<HTMLElement>(null);
  const navbarOpenRef = useRef<HTMLDivElement>(null);
  const navbarCloseRef = useRef<HTMLDivElement>(null);

  const toggleNavbar = () => {
    navbarRef.current?.classList.toggle("h-full");
    navbarRef.current?.classList.toggle("h-24");
    navbarOpenRef.current?.classList.toggle("hidden");
    navbarCloseRef.current?.classList.toggle("hidden");
  };

  return (
    <nav
      className="fixed top-0 right-0 left-0 z-10 h-24 bg-black p-4 text-white transition-all duration-300 lg:h-24"
      ref={navbarRef}
    >
      <div className="flex items-center justify-between">
        <a className="flex items-center gap-2" href="/">
          <img className="w-16" src={BrandIcon} alt="Pure Zen Essence Logo" />
          <span className="mt-2 text-2xl font-extrabold">Pure Zen Essence</span>
        </a>
        <ul className="ml-2 hidden items-center overflow-hidden rounded-md border-2 border-white font-bold lg:flex">
          {sections.map(({ id, name }) => (
            <li key={id}>
              <a
                href={id}
                className="transition-[padding, color] block px-4 py-2 duration-250 hover:px-5 hover:py-3 hover:text-green-400"
              >
                {name}
              </a>
            </li>
          ))}
        </ul>
        <div className="mt-3 cursor-pointer lg:hidden" onClick={toggleNavbar}>
          <div className="text-2xl" ref={navbarOpenRef}>
            <FaBars />
          </div>
          <div className="-mr-1.5 hidden text-4xl" ref={navbarCloseRef}>
            <IoClose />
          </div>
        </div>
      </div>
    </nav>
  );
};

export default Navbar;
