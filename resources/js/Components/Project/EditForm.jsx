// Import Core Libraries
import { useState, useEffect } from "react";
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-react";

// Import Bootstrap Components
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";

export default function EditForm({ project, errors }) {
    const [validated, setValidated] = useState(false);
    const [values, setValues] = useState({
        title: project.title,
        description: project.description,
        image: null,
    });

    console.log("errors : ", errors);
    console.log("data : ", values);
    const handleChanges = (e) => {
        if (e.target.name === "image") {
            const reader = new FileReader();

            reader.onload = function (e) {
                $(".show-project-image").attr("src", e.target.result);
            };

            reader.readAsDataURL(e.target.files[0]);

            setValues({
                ...values,
                image: e.target.files[0],
            });
        } else {
            setValues({
                ...values,
                [e.target.name]: e.target.value,
            });
        }
    };

    const handleSubmit = (e) => {
        const form = e.currentTarget;
        e.preventDefault();

        if (form.checkValidity() === false) {
            e.stopPropagation();
        }

        setValidated(true);
        Inertia.patch("/project/" + project.id, values);
    };

    return (
        <Form noValidate validated={validated} onSubmit={handleSubmit}>
            <Form.Group className="mb-3" controlId="title">
                <Form.Label>{transData("form.project.title")}</Form.Label>
                <Form.Control
                    type="text"
                    name="title"
                    placeholder={transData("form.project.placeholder.title")}
                    onChange={handleChanges}
                    defaultValue={project.title}
                    required
                    autoFocus
                />
            </Form.Group>
            <Form.Control.Feedback type="invalid">
                {errors.title}
            </Form.Control.Feedback>
            <Form.Group className="mb-3" controlId="description">
                <Form.Label>{transData("form.project.description")}</Form.Label>
                <Form.Control
                    type="text"
                    name="description"
                    placeholder={transData(
                        "form.project.placeholder.description"
                    )}
                    onChange={handleChanges}
                    defaultValue={project.description}
                    required
                    autoFocus
                />
            </Form.Group>
            <Form.Control.Feedback type="invalid">
                {errors.description}
            </Form.Control.Feedback>
            <Form.Group className="mb-3" controlId="image">
                <Form.Label>{transData("form.project.image")}</Form.Label>
                {project.image ? (
                    <img
                        src={"/storage/image/" + project.image}
                        alt={project.title}
                        className="show-project-image mb-3"
                        width={100}
                    />
                ) : (
                    <img
                        src={"/image/projects/project-1.jpg"}
                        alt={project.title}
                        className="show-project-image mb-3"
                        width={100}
                    />
                )}
                <Form.Control
                    type="file"
                    name="image"
                    onChange={handleChanges}
                />
            </Form.Group>
            <Form.Control.Feedback type="invalid">
                {errors.image}
            </Form.Control.Feedback>
            <Link
                href={route("project.index")}
                as="button"
                className="btn btn-success me-2"
            >
                {transData("form.project.back")}
            </Link>
            <Button variant="primary" type="submit">
                {transData("form.project.submit")}
            </Button>
        </Form>
    );
}
