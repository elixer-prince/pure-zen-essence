import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";
import { fileURLToPath, URL } from "url";

// https://vite.dev/config/
export default defineConfig({
  plugins: [react()],
  build: {
    outDir: "dist",
    assetsDir: "assets",
    emptyOutDir: true,
    target: "esnext",
    rollupOptions: {
      output: {
        manualChunks: undefined,
        entryFileNames: `assets/[name].js?v=[hash]`,
        chunkFileNames: `assets/[name].js?v=[hash]`,
        assetFileNames: `assets/[name].[ext]?v=[hash]`
      }
    }
  },
  resolve: {
    alias: {
      "@": fileURLToPath(new URL("./src", import.meta.url))
    }
  }
});
