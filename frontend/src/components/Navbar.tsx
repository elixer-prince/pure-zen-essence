import { useRef } from "react";
// Components
import NavbarLogo from "./NavbarLogo";
import NavbarLinks from "./NavbarLinks";
// Icons
import { FaBars } from "react-icons/fa6";
import { IoClose } from "react-icons/io5";

const Navbar = () => {
  const sections = [
    { id: "#", name: "HOME" },
    { id: "#about", name: "ABOUT US" },
    { id: "#products", name: "OUR PRODUCTS" },
    { id: "#testimonials", name: "TESTIMONIALS" },
    { id: "#faqs", name: "FAQS" },
  ];

  const navbarRef = useRef<HTMLElement>(null);
  const toggleButtonRef = useRef<HTMLDivElement>(null);
  const closeButtonRef = useRef<HTMLDivElement>(null);
  const navbarLinksRef = useRef<HTMLUListElement>(null);

  const toggleNavbar = () => {
    if (
      navbarRef.current &&
      toggleButtonRef.current &&
      closeButtonRef.current &&
      navbarLinksRef.current
    ) {
      navbarRef.current.classList.toggle("h-full");
      navbarRef.current.classList.toggle("h-24");
      toggleButtonRef.current.classList.toggle("hidden");
      closeButtonRef.current.classList.toggle("hidden");
      document.body.classList.toggle("overflow-hidden");
      navbarLinksRef.current.classList.toggle("hidden");
      navbarLinksRef.current.classList.toggle("flex");
    }
  };

  return (
    <nav
      className="to-brand-darkblue/90 fixed top-0 right-0 left-0 z-10 h-24 overflow-hidden bg-linear-to-r from-black/90 p-4 text-white backdrop-blur-sm transition-all duration-300 lg:h-24"
      ref={navbarRef}
    >
      {/* Navbar Main Container */}
      <div className="flex items-center justify-between">
        {/* Left Container */}
        <div className="flex items-center gap-8">
          <NavbarLogo />
          <NavbarLinks sections={sections} />
        </div>
        {/* Right Container */}
        <div className="cursor-pointer lg:hidden" onClick={toggleNavbar}>
          <div
            className="hover:text-brand-green mr-1.5 flex items-center gap-2 text-2xl font-extrabold transition-colors duration-250"
            ref={toggleButtonRef}
          >
            <span className="hidden text-lg sm:block">MENU</span>
            <FaBars />
          </div>
          <div
            className="hidden text-4xl transition-colors duration-500 hover:text-red-400"
            ref={closeButtonRef}
          >
            <IoClose />
          </div>
        </div>
      </div>
      <ul className="mt-16 hidden flex-col gap-8" ref={navbarLinksRef}>
        {sections.map(({ id, name }) => (
          <li
            key={id}
            className="hover:text-brand-green text-center text-2xl font-black transition-colors"
          >
            <a href={id} onClick={toggleNavbar}>
              {name}
            </a>
          </li>
        ))}
      </ul>
    </nav>
  );
};

export default Navbar;
