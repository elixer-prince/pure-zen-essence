import BrandIcon from "../assets/brand-icon.png";

const NavbarLogo = () => {
  return (
    <a className="flex items-center gap-2" href="/">
      <img
        className="h-16 animate-bounce"
        src={BrandIcon}
        alt="Pure Zen Essence Logo"
      />
      <span className="mt-2 text-2xl font-extrabold">Pure Zen Essence</span>
    </a>
  );
};

export default NavbarLogo;
