import { useRef } from "react";
import { FaBars } from "react-icons/fa6";
import { IoClose } from "react-icons/io5";
import NavbarLogo from "./NavbarLogo";
import NavbarLinks from "./NavbarLinks";

const Navbar = () => {
  const navbarRef = useRef<HTMLElement>(null);
  const toggleButtonRef = useRef<HTMLDivElement>(null);
  const closeButtonRef = useRef<HTMLDivElement>(null);

  const toggleNavbar = () => {
    if (
      navbarRef.current &&
      toggleButtonRef.current &&
      closeButtonRef.current
    ) {
      navbarRef.current.classList.toggle("h-full");
      navbarRef.current.classList.toggle("h-24");
      toggleButtonRef.current.classList.toggle("hidden");
      closeButtonRef.current.classList.toggle("hidden");
      document.body.classList.toggle("overflow-hidden");
    }
  };

  return (
    <nav
      className="to-brand-darkblue/90 fixed top-0 right-0 left-0 z-10 h-24 bg-linear-to-r from-black/90 p-4 text-white backdrop-blur-sm transition-all duration-300 lg:h-24"
      ref={navbarRef}
    >
      {/* Navbar Main Container */}
      <div className="flex items-center justify-between">
        {/* Left Container */}
        <div className="flex items-center gap-8">
          <NavbarLogo />
          <NavbarLinks />
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
    </nav>
  );
};

export default Navbar;
