// Import Custom Components
import Header from "@/Partials/Portofolio/Header";
import Footer from "@/Partials/Portofolio/Footer";

export default function Portofolio({ owner, application, children }) {
    return (
        <div>
            <Header application={application} />
            {children}
            <Footer owner={owner} />
        </div>
    );
}
