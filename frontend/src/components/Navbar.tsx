import { useRef } from "react";
import { FaBars } from "react-icons/fa6";
import { IoClose } from "react-icons/io5";
import BrandIcon from "../assets/brand-icon.png";

const Navbar = () => {
  const sections: { id: string; name: string }[] = [
    { id: "#", name: "HOME" },
    { id: "#about", name: "ABOUT US" },
    { id: "#products", name: "OUR PRODUCTS" },
    { id: "#testimonials", name: "TESTIMONIALS" },
    { id: "#faqs", name: "FAQS" },
  ];

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
      className="to-brand-darkblue fixed top-0 right-0 left-0 z-10 h-24 bg-linear-to-r from-black p-4 text-white transition-all duration-300 lg:h-24"
      ref={navbarRef}
    >
      <div className="flex items-center justify-between">
        <div className="flex items-center gap-8">
          <a className="flex items-center gap-2" href="/">
            <img
              className="h-16 animate-bounce"
              src={BrandIcon}
              alt="Pure Zen Essence Logo"
            />
            <span className="mt-2 text-2xl font-extrabold">
              Pure Zen Essence
            </span>
          </a>
          <ul className="hidden items-center overflow-hidden rounded-md border-2 border-white font-bold lg:flex">
            {sections.map(({ id, name }) => (
              <li key={id}>
                <a
                  href={id}
                  className="transition-[padding, color] hover:text-brand-green block to-white/15 px-4 py-2 duration-250 hover:bg-linear-to-r hover:from-white/10 hover:px-6 hover:py-3"
                >
                  {name}
                </a>
              </li>
            ))}
          </ul>
        </div>
        <div className="cursor-pointer lg:hidden" onClick={toggleNavbar}>
          <div
            className="mr-1.5 flex items-center gap-2 text-2xl font-extrabold"
            ref={navbarOpenRef}
          >
            <span className="hidden text-lg sm:block">MENU</span> <FaBars />
          </div>
          <div
            className="hidden text-4xl transition-colors duration-500 hover:text-red-400"
            ref={navbarCloseRef}
          >
            <IoClose />
          </div>
        </div>
      </div>
    </nav>
  );
};

export default Navbar;
