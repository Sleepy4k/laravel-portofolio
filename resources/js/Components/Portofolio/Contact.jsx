import { useState } from "react";
import { Inertia } from "@inertiajs/inertia";
import Container from "react-bootstrap/Container";
import Button from "react-bootstrap/Button";
import Form from "react-bootstrap/Form";
import Row from "react-bootstrap/Row";
import Col from "react-bootstrap/Col";

export default function Contact() {
    const [values, setValues] = useState({
        name: "",
        email: "",
        message: "",
    });

    const handleChanges = (e) => {
        setValues({
            ...values,
            [e.target.name]: e.target.value,
        });
    };

    const handleSubmit = (e) => {
        e.preventDefault();

        alert(
            "Thank you for your message. I will read it as soon as possible."
        );

        Inertia.post("/contact", values);
    };

    return (
        <section id="contact">
            <Container>
                <Row className="text-center mb-3">
                    <Col>
                        <h2>Contact Me</h2>
                    </Col>
                </Row>
                <Row className="justify-content-center">
                    <Col className="col-md-6">
                        <Form>
                            <Form.Group className="mb-3" controlId="name">
                                <Form.Label>Nama Lengkap</Form.Label>
                                <Form.Control
                                    type="text"
                                    name="name"
                                    placeholder="Nama kamu"
                                    onChange={handleChanges}
                                />
                            </Form.Group>
                            <Form.Group className="mb-3" controlId="email">
                                <Form.Label>Email</Form.Label>
                                <Form.Control
                                    type="email"
                                    name="email"
                                    placeholder="Email kamu"
                                    onChange={handleChanges}
                                />
                            </Form.Group>
                            <Form.Group className="mb-3" controlId="message">
                                <Form.Label>Pesan</Form.Label>
                                <Form.Control
                                    as="textarea"
                                    rows={3}
                                    name="message"
                                    placeholder="Tulisakan pesan kamu disini"
                                    onChange={handleChanges}
                                />
                            </Form.Group>
                            <Button
                                variant="primary"
                                type="submit"
                                onClick={handleSubmit}
                            >
                                Kirim
                            </Button>
                        </Form>
                    </Col>
                </Row>
            </Container>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                    fill="#0D6efd"
                    fillOpacity="1"
                    d="M0,288L60,282.7C120,277,240,267,360,224C480,181,600,107,720,117.3C840,128,960,224,1080,256C1200,288,1320,256,1380,240L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
                ></path>
            </svg>
        </section>
    );
}
