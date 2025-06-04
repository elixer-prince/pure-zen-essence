import { useRef } from "react";

// REACT ICONS
import { FaBars } from "react-icons/fa6";
import { IoClose } from "react-icons/io5";

// COMPONENTS
import NavbarLogo from "./NavbarLogo";
import NavbarLinks from "./NavbarLinks";

// DATA
import sections from "./../homepage-sections";

const Navbar = () => {
  // REFERENCES
  const navbarRef = useRef<HTMLElement>(null);
  const toggleButtonRef = useRef<HTMLDivElement>(null);
  const closeButtonRef = useRef<HTMLDivElement>(null);
  const navbarLinksRef = useRef<HTMLUListElement>(null);

  const toggleNavbar = () => {
    if (
      // Ensure the references are present
      navbarRef.current &&
      toggleButtonRef.current &&
      closeButtonRef.current &&
      navbarLinksRef.current
    ) {
      // Toggle the navbar expansion
      navbarRef.current.classList.toggle("h-full");
      navbarRef.current.classList.toggle("h-24");
      // Toggle the navbar blur effect
      navbarRef.current.classList.toggle("from-black");
      navbarRef.current.classList.toggle("to-brand-darkblue");
      navbarRef.current.classList.toggle("from-black/90");
      navbarRef.current.classList.toggle("to-brand-darkblue/90");

      // Toggle the icon being shown
      toggleButtonRef.current.classList.toggle("hidden");
      closeButtonRef.current.classList.toggle("hidden");

      // Toggle Link Container visibility
      navbarLinksRef.current.classList.toggle("hidden");
      navbarLinksRef.current.classList.toggle("flex");

      document.body.classList.toggle("overflow-hidden");
    }
  };

  return (
    // HOMEPAGE NAVBAR
    <nav
      className="to-brand-darkblue fixed top-0 right-0 -bottom-12 left-0 z-10 h-24 bg-gradient-to-r from-black p-4 text-white shadow shadow-black backdrop-blur-sm transition-all duration-500 select-none"
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
      {/* 
          Mobile Navbar Links
          Hidden by default, but shown when expanded
      */}
      <ul
        className="mt-16 hidden flex-col gap-8 transition-all duration-500"
        ref={navbarLinksRef}
      >
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
