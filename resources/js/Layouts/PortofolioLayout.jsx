// Import Custom Components
import Header from "@/Components/Portofolio/Header";
import Footer from "@/Components/Portofolio/Footer";

export default function Portofolio({ owner, application, children }) {
    return (
        <div>
            <Header application={application} />
            {children}
            <Footer owner={owner} />
        </div>
    );
}
