import { Inter } from "next/font/google";
import "./styles/globals.css";

import Navbar from "./components/Navbar";
import Footer from "./components/Footer";

const inter = Inter({ subsets: ["latin"] });

export const metadata = {
  title: "Ninja List",
  description: "Ninja List Nextjs App",
};

export default function RootLayout({ children }) {
  return (
    <html lang="en" suppressHydrationWarning={true}>
      <body className={`${inter.className} content`}>
          <Navbar />
            {children}
          <Footer/>
        </body>
    </html>
  );
}
