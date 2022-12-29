// Import Core Libraries
import { Link } from "@inertiajs/inertia-react";

// Import Bootstrap Components
import Nav from "react-bootstrap/Nav";
import Navbar from "react-bootstrap/Navbar";
import Container from "react-bootstrap/Container";

export default function Header({ application }) {
    return (
        <Navbar bg="primary" variant="dark" className="shadow-sm fixed-top">
            <Container>
                <Link href={route("dashboard.index")} className="navbar-brand">
                    {application.app_name}
                </Link>
                <Nav className="ms-auto">
                    <Nav.Link href="#home">{transData("navbar.home")}</Nav.Link>
                    <Nav.Link href="#about">
                        {transData("navbar.about")}
                    </Nav.Link>
                    <Nav.Link href="#projects">
                        {transData("navbar.project")}
                    </Nav.Link>
                    <Nav.Link href="#contact">
                        {transData("navbar.contact")}
                    </Nav.Link>
                </Nav>
            </Container>
        </Navbar>
    );
}
