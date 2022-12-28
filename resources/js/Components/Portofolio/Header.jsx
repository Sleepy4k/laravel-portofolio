import Nav from "react-bootstrap/Nav";
import Navbar from "react-bootstrap/Navbar";
import { Link } from "@inertiajs/inertia-react";
import Container from "react-bootstrap/Container";

export default function Header({ owner }) {
    return (
        <Navbar bg="primary" variant="dark" className="shadow-sm fixed-top">
            <Container>
                <Link href={route("dashboard.index")} className="navbar-brand">
                    Portofolio
                </Link>
                <Nav className="ms-auto">
                    <Nav.Link href="#home">Home</Nav.Link>
                    <Nav.Link href="#about">About</Nav.Link>
                    <Nav.Link href="#projects">Projects</Nav.Link>
                    <Nav.Link href="#contact">Contact</Nav.Link>
                </Nav>
            </Container>
        </Navbar>
    );
}
